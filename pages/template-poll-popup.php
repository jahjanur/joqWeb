<?php
/* Template Name: POLL POPUP (Modern Black - JS Sort) */

function generate_poll_popup_html($config) {
    $term_id      = $config['term_id'];
    $class_slug   = $config['class_slug']; 
    $cookie_name  = $config['cookie_name']; 
    $popup_cookie = 'joq_popup_1h_' . $class_slug; 
    $file_paths   = $config['file_paths']; 

    $args = array(
        'post_type'      => 'poll',
        'posts_per_page' => 1,
        'orderby'        => 'date',
        'order'          => 'DESC',
        'tax_query'      => array(
            array(
                'taxonomy' => 'poll-category',
                'field'    => 'id',
                'terms'    => $term_id,
            ),
        ),
    );

    $query = new WP_Query($args);

    ob_start();

    if ($query->have_posts()) {
        while ($query->have_posts()) {
            $query->the_post();
            
            $poll_field = get_field('kandidatet'); 
            $end_date   = get_field('perfundon');
            $is_enabled = get_field('enabled');

            if (!empty($poll_field) && $is_enabled) {

                // 1. Calculate Total Votes (for percentages)
                // We do NOT sort here anymore. We keep original order.
                $total_votes = 0;
                foreach ($poll_field as $p) {
                    $total_votes += intval($p['vota']);
                }
                if ($total_votes === 0) $total_votes = 1;

                // 2. CSS STYLES
                ?>
                <style>
                    /* Overlay */
                    #joq-modal-<?php echo $class_slug; ?> {
                        display: none; 
                        position: fixed; z-index: 999999; /* Very High Z-Index */
                        left: 0; top: 0; width: 100%; height: 100%;
                        overflow-y: auto; 
                        background-color: rgba(0,0,0,0.85);
                        backdrop-filter: blur(5px);
                        align-items: center; justify-content: center;
                        font-family: 'Helvetica Neue', Helvetica, Arial, sans-serif;
                    }
                    
                    /* Modal Box */
                    .joq-modern-modal {
                        background-color: #ffffff;
                        margin: 40px auto; 
                        padding: 0;
                        border: 1px solid #333;
                        width: 90%; max-width: 450px;
                        border-radius: 8px;
                        box-shadow: 0 20px 60px rgba(0,0,0,0.6);
                        position: relative;
                        overflow: hidden;
                    }

                    /* Header */
                    .joq-modal-header { position: relative; width: 100%; height: 200px; }
                    .joq-modal-header img { width: 100%; height: 100%; object-fit: cover; }
                    
                    /* CLOSE BUTTON - Fixed & Visible */
                    .joq-modal-close {
                        position: fixed;
                        top: 10px;
                        right: 10px;
                        width: 32px;
                        height: 32px;
                        border-radius: 50%;
                        font-size: 23px;
                        font-weight: bold;
                        line-height: 32px;
                        text-align: center;
                        cursor: pointer;
                        z-index: 100;
                        display: flex;
                        border: none;
                        align-items: center;
                        justify-content: center;
                    }
                    .joq-modal-close:hover {transform: scale(1.1); }

                    /* Body */
                    .joq-modal-body {
                        padding: 20px;
                        max-height: calc(100vh - 290px);
                        overflow: auto;
                    }
                    .joq-modal-title { margin: 0 0 15px 0; color: #111; font-size: 19px; text-align: center; font-weight: 800; text-transform: uppercase; }
                    .joq-countdown { text-align: center; font-size: 13px; color: #e74c3c; font-weight: 700; margin-bottom: 20px; }

                    /* List */
                    .joq-modal-list { list-style: none; padding: 0; margin: 0; display: flex; flex-direction: column; }
                    .joq-modal-item { 
                        display: flex; align-items: center; 
                        border-bottom: 1px solid #f2f2f2; padding: 12px 0; 
                        width: 100%;
                    }
                    
                    .joq-item-img { 
                        width: 50px; height: 50px; border-radius: 50%; 
                        object-fit: cover; margin-right: 15px; 
                        border: 1px solid #ddd; flex-shrink: 0;
                    }
                    .joq-item-info { flex: 1; padding-right: 10px; overflow: hidden; }
                    .joq-item-name { display: block; font-weight: 700; font-size: 15px; color: #000; line-height: 1.2; }

                    /* Black Button */
                    .joq-popup-btn {
                        padding: 8px 18px; border-radius: 4px; border: none;
                        font-weight: 700; cursor: pointer; font-size: 12px; text-transform: uppercase;
                        background: #000; color: #fff; 
                        transition: opacity 0.2s; flex-shrink: 0;
                    }
                    .joq-popup-btn:hover { opacity: 0.7; }
                    .joq-popup-btn:disabled { background-color: #aaa; cursor: not-allowed; }

                    /* Results */
                    .joq-result-container { 
                        display: none; 
                        width: 100%; margin-top: 4px;
                    }
                    .joq-result-top { display: flex; justify-content: space-between; margin-bottom: 2px; }
                    .joq-result-votes { font-size: 11px; color: #666; font-weight: 600; }
                    .joq-result-percent { font-size: 11px; color: #000; font-weight: 800; }
                    
                    .joq-progress-bg { width: 100%; height: 6px; background-color: #eee; border-radius: 3px; overflow: hidden; }
                    .joq-progress-fill { height: 100%; width: 0%; border-radius: 3px; transition: width 1s ease-in-out; }
                    .joq-progress-fill.heroi { background-color: #27ae60; }
                    .joq-progress-fill.harami { background-color: #c0392b; }
                </style>

                <?php
                // 3. HTML STRUCTURE
                $modal_id = 'joq-modal-' . $class_slug;
                $timer_id = 'timer-popup-' . $class_slug;
                $end_timestamp = $end_date ? strtotime($end_date) * 1000 : 0;
                $timer_display = $end_date ? 'Loading...' : '';

                echo '<div id="' . $modal_id . '" class="joq-modal-overlay">';
                echo '  <div class="joq-modern-modal">';
                
                // Close Button inside Header
                echo '    <div class="joq-modal-header">';
                echo '      <button type="button" class="joq-modal-close" onclick="document.getElementById(\''.$modal_id.'\').style.display=\'none\';">&times;</button>';
                echo '      <img src="' . fix_post_thumbnail(get_the_post_thumbnail_url(get_the_ID(), 'large')) . '" alt="">';
                echo '    </div>';

                echo '    <div class="joq-modal-body">';
                echo '      <h2 class="joq-modal-title">' . get_the_title() . '</h2>';
                
                if ($end_date) {
                    echo '  <div class="joq-countdown" id="' . $timer_id . '">' . $timer_display . '</div>';
                }

                echo '      <ul class="joq-modal-list">';
                
                // Render in ORIGINAL ORDER
                foreach ($poll_field as $poll) {
                    $emri   = esc_html($poll['emri']);
                    $foto   = fix_post_thumbnail(esc_url($poll['foto']));
                    $raw_id = esc_html($poll['id']);
                    $votes  = intval($poll['vota']);
                    
                    $data_id_attr = ($class_slug === 'harami') ? $raw_id . '-harami' : $raw_id;
                    $percent = ($total_votes > 0) ? round(($votes / $total_votes) * 100) : 0;

                    // Note: We add `data-votes` to the LI so JS can sort it later
                    echo '<li class="joq-modal-item" data-sort-votes="'.$votes.'">';
                    echo '  <img src="'.$foto.'" class="joq-item-img">';
                    echo '  <div class="joq-item-info">';
                    echo '    <span class="joq-item-name">'.$emri.'</span>';
                    
                    // Result Bar (Hidden initially)
                    echo '    <div class="joq-result-container" data-id="'.$data_id_attr.'" data-votes-raw="'.$votes.'">';
                    echo '       <div class="joq-result-top">';
                    echo '          <span class="joq-result-votes">'.number_format($votes).' vota</span>';
                    echo '          <span class="joq-result-percent">'.$percent.'%</span>';
                    echo '       </div>';
                    echo '       <div class="joq-progress-bg">';
                    echo '          <div class="joq-progress-fill '.$class_slug.'" style="width:'.$percent.'%"></div>';
                    echo '       </div>';
                    echo '    </div>'; 

                    echo '  </div>'; // End info

                    echo '  <button 
                                data-post-id="'.get_the_ID().'" 
                                data-id="' . $data_id_attr . '" 
                                class="joq-popup-btn ' . $class_slug . '">VOTO</button>';
                    echo '</li>';
                }
                echo '      </ul>';
                echo '    </div>'; // end body
                echo '  </div>'; // end modal content
                echo '</div>'; // end overlay

                // 4. JAVASCRIPT LOGIC
                $js_selector_suffix = ($class_slug === 'harami') ? " + '-harami'" : "";

                echo "<script>
                (function() {
                    var modal = document.getElementById('{$modal_id}');
                    var voteCookie = '{$cookie_name}';
                    var freqCookie = '{$popup_cookie}';
                    var slug = '{$class_slug}';
                    var endTimestamp = {$end_timestamp};

                    function getCookie(name) {
                        var v = document.cookie.match('(^|;) ?' + name + '=([^;]*)(;|$)');
                        return v ? v[2] : null;
                    }
                    function setCookie(name, value, days) {
                        var d = new Date();
                        d.setTime(d.getTime() + (days * 24 * 60 * 60 * 1000));
                        document.cookie = name + '=' + value + ';path=/;expires=' + d.toGMTString();
                    }

                    // --- REORDER FUNCTION ---
                    // Sorts DOM elements based on vote count
                    function reorderCandidates() {
                        var list = jQuery(modal).find('.joq-modal-list');
                        var items = list.children('li').get();
                        
                        items.sort(function(a, b) {
                           // Get integer values from data attribute
                           var vA = parseInt(jQuery(a).attr('data-sort-votes') || 0);
                           var vB = parseInt(jQuery(b).attr('data-sort-votes') || 0);
                           return vB - vA; // Descending Sort
                        });
                        
                        // Re-append in new order
                        jQuery.each(items, function(i, item) {
                            list.append(item);
                        });
                    }

                    // --- SHOW RESULTS MODE ---
                    function showResultsMode() {
                        jQuery(modal).find('.joq-popup-btn').hide(); 
                        reorderCandidates(); // Trigger the sort
                        jQuery(modal).find('.joq-result-container').fadeIn(); 
                    }

                    // 1. Popup Frequency (1 Hour)
                    if (!getCookie(freqCookie)) {
                        setTimeout(function(){
                            modal.style.display = 'flex';
                            setCookie(freqCookie, 'seen', 1/24); 
                        }, 2000);
                    }

                    // 2. Check Voted Status
                    if (getCookie(voteCookie)) {
                        showResultsMode();
                    }

                    // 3. Countdown
                    if (endTimestamp > 0) {
                        var timerEl = document.getElementById('{$timer_id}');
                        var timerInt = setInterval(function() {
                            var now = new Date().getTime();
                            var dist = endTimestamp - now;
                            if (dist < 0) {
                                clearInterval(timerInt);
                                if(timerEl) timerEl.innerHTML = 'KA PËRFUNDUAR';
                                jQuery(modal).find('.joq-popup-btn').prop('disabled', true).text('Përfunduar');
                            } else {
                                var d = Math.floor(dist / (1000 * 60 * 60 * 24));
                                var h = Math.floor((dist % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
                                var m = Math.floor((dist % (1000 * 60 * 60)) / (1000 * 60));
                                if(timerEl) timerEl.innerHTML = 'Mbyllet në: ' + d + 'd ' + h + 'h ' + m + 'm';
                            }
                        }, 1000);
                    }

                    // 4. Voting Logic
                    jQuery(modal).find('.joq-popup-btn').on('click', function(e) {
                        e.preventDefault();
                        var btn = jQuery(this);
                        if(btn.prop('disabled')) return;

                        btn.text('...');
                        var voteID = btn.data('id');
                        var postID = btn.data('post-id');

                        jQuery.post('https://dynamic2.joq-albania.com/voto', { voteID: voteID, postID: postID })
                        .done(function(data) {
                            if (data && data.data && data.data.candidates) {
                                setCookieForToday(voteCookie, '1'); 
                                
                                var candidates = data.data.candidates;
                                var newTotal = 0;
                                candidates.forEach(function(c){ newTotal += parseInt(c['vota']); });
                                if(newTotal === 0) newTotal = 1;

                                // Update DOM data first
                                candidates.forEach(function(c){
                                    var cID = c['id'];
                                    var selector = cID {$js_selector_suffix};
                                    var votes = parseInt(c['vota']);
                                    var percent = Math.round((votes / newTotal) * 100);

                                    // Find specific container by attribute
                                    var container = jQuery(modal).find('.joq-result-container[data-id=\"'+selector+'\"]');
                                    var li = container.closest('li');

                                    // Update visual text
                                    container.find('.joq-result-votes').text(numberWithCommas(votes) + ' vota');
                                    container.find('.joq-result-percent').text(percent + '%');
                                    container.find('.joq-progress-fill').css('width', percent + '%');
                                    
                                    // Update Data Attribute for sorting
                                    li.attr('data-sort-votes', votes);
                                });
                                
                                // Now switch to results and sort
                                showResultsMode();
                            }
                        });
                    });

                    // Background Click Close
                    modal.addEventListener('click', function(e) {
                        if (e.target === modal) {
                            modal.style.display = 'none';
                        }
                    });

                })();
                </script>";
            }
        }
    }

    $content = ob_get_contents();
    ob_end_clean();

    foreach ($file_paths as $path) {
        gliterin_optimizer_legacy_file_put_contents($path, $content);
    }
    wp_reset_postdata();
}

// ==========================================================
// EXECUTE
// ==========================================================
generate_poll_popup_html(array(
    'term_id'     => 122880,
    'class_slug'  => 'heroi',
    'cookie_name' => '__Start-1PAPISIDJP',
    'file_paths'  => array(
        '/var/www/html/joq.al/wordpress/cachedWeb/myAjax/sondazh-popup.html',
        '/var/www/html/joq.al/wordpress/multipleWeb/joqalbania/myAjax/sondazh-popup.html'
    )
));

generate_poll_popup_html(array(
    'term_id'     => 122881,
    'class_slug'  => 'harami',
    'cookie_name' => '__Start-1PAPISIDJP2',
    'file_paths'  => array(
        '/var/www/html/joq.al/wordpress/cachedWeb/myAjax/sondazh-harami-popup.html',
        '/var/www/html/joq.al/wordpress/multipleWeb/joqalbania/myAjax/sondazh-harami-popup.html'
    )
));
?>