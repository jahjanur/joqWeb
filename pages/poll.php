<?php
/* Template Name: POLL
*/

// Function to generate poll HTML, cache it, and handle logic for both types
function generate_poll_html($config) {
    // Unpack configuration
    $term_id      = $config['term_id'];
    $class_slug   = $config['class_slug']; // 'heroi' or 'harami'
    $cookie_name  = $config['cookie_name'];
    $js_enable_var= $config['js_enable_var'];
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

    // Start Buffer
    ob_start();

    if ($query->have_posts()) {
        while ($query->have_posts()) {
            $query->the_post();
            
            $poll_field = get_field('kandidatet'); 
            $end_date   = get_field('perfundon'); // Date field for Countdown
            $is_enabled = get_field('enabled');

            if (!empty($poll_field)) {
                if ($is_enabled) {
                    
                    // -- HEADER & IMAGE --
                    echo "<script>var {$js_enable_var} = true;</script>";
                    echo '<div class="news-title"><h1>' . get_the_title() . '</h1></div>';
                    echo '<div class="news-featured-image"><img src="' . fix_post_thumbnail(get_the_post_thumbnail_url( get_the_ID(), 'full' )) . '" alt="' . get_the_title() . '"><div class="main-image-caption"></div></div>';
                    echo '<link rel="stylesheet" href="https://static.joq-albania.com/assets/css/joq-poll.css" type="text/css"/>';

                    // -- COUNTDOWN TIMER LOGIC --
                    if ($end_date) {
                        // Create a unique ID for the timer
                        $timer_id = 'poll-timer-' . $class_slug . '-' . get_the_ID();
                        // Convert ACF date to JS timestamp (milliseconds)
                        $end_timestamp = strtotime($end_date) * 1000; 

                        echo '<div class="joq-countdown-wrapper" style="text-align: center; margin: 15px 0; font-family: sans-serif;">';
                        echo '<span style="font-weight: bold; color: #555;">Mbyllet në: </span>';
                        echo '<span id="' . $timer_id . '" style="font-weight: bold; color: #e74c3c; font-size: 1.2em;">Loading...</span>';
                        echo '</div>';

                        // Inline JS for Countdown
                        echo "
                        <script>
                        (function() {
                            var countDownDate = {$end_timestamp};
                            var timerId = '{$timer_id}';
                            var el = document.getElementById(timerId);
                            
                            if(countDownDate && el) {
                                var x = setInterval(function() {
                                    var now = new Date().getTime();
                                    var distance = countDownDate - now;

                                    if (distance < 0) {
                                        clearInterval(x);
                                        el.innerHTML = 'KA PËRFUNDUAR';
                                        el.style.color = '#999';
                                        // Optional: Disable voting buttons visually
                                        jQuery('.joq-poll-item-button.{$class_slug}').css('opacity', '0.5').text('Përfunduar').prop('disabled', true);
                                    } else {
                                        var days = Math.floor(distance / (1000 * 60 * 60 * 24));
                                        var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
                                        var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
                                        var seconds = Math.floor((distance % (1000 * 60)) / 1000);
                                        
                                        el.innerHTML = days + 'd ' + hours + 'h ' + minutes + 'm ' + seconds + 's ';
                                    }
                                }, 1000);
                            }
                        })();
                        </script>";
                    }
                    // -- END COUNTDOWN --

                    echo '<div class="joq-poll-wrapper article-wrapper">';
                    echo '<div class="joq-poll-body" style="height: auto;">';
                    echo '<ul>';

                    foreach ($poll_field as $poll) {
                        $emri = esc_html($poll['emri']);
                        $pershkrimi = esc_html($poll['pershkrimi']);
                        $foto = fix_post_thumbnail(esc_url($poll['foto']));
                        $raw_id = esc_html($poll['id']);
                        $votes = esc_html($poll['vota']);

                        // Handle the specific ID logic (Harami uses '-harami' suffix in ID)
                        $data_id_attr = ($class_slug === 'harami') ? $raw_id . '-harami' : $raw_id;

                        echo '<li>';
                        echo '<div class="joq-poll-item-wrapper">';
                        echo '<div class="joq-poll-item-image"><img src="' . $foto . '" alt="' . $emri . '"></div>';
                        echo '<div class="joq-poll-item-title">' . $emri . '</div>';
                        echo '<div class="joq-poll-item-description">' . $pershkrimi . '</div>';
                        echo '<div class="joq-poll-item-action">';
                        echo '<button data-post-id="'.get_the_ID().'" data-id="' . $data_id_attr . '" class="joq-poll-item-button ' . $class_slug . '">Voto</button>';
                        echo '<span data-post-id="'.get_the_ID().'" data-id="' . $data_id_attr . '" class="joq-poll-item-result ' . $class_slug . '">'.$votes.' Vota</span>';
                        echo '</div>';
                        echo '</div>';
                        echo '</li>';
                    }

                    echo '</ul>';
                    echo '</div>';
                    echo '</div>';

                    // -- JAVASCRIPT LOGIC --
                    // Determine how to rebuild the selector in the JS success callback
                    $js_selector_suffix = ($class_slug === 'harami') ? " + '-harami'" : "";

                    echo "
                    <script>
                    const pollCookieName_{$class_slug} = '{$cookie_name}';

                    if (getCookie(pollCookieName_{$class_slug})) {
                        $('.joq-poll-item-button.{$class_slug}').css('display', 'none');
                        $('.joq-poll-item-result.{$class_slug}').css('display', 'block');
                    }

                    $('.joq-poll-item-button.{$class_slug}').on('click', async function(e) {
                        e.preventDefault();
                        const self = $(this);
                        
                        // Prevent click if disabled (e.g. by countdown)
                        if(self.prop('disabled')) return;

                        $('.joq-poll-item-button.{$class_slug}').html('...');
                        const voteID = self.data('id');
                        const postID = self.data('post-id');

                        $.post('https://dynamic2.joq-albania.com/voto', { voteID, postID })
                        .done(( data ) => {
                            if (data && data.data && data.data.candidates) {
                                const candidates = data.data.candidates;
                                setCookieForToday(pollCookieName_{$class_slug}, '1');
                                $('.joq-poll-item-button.{$class_slug}').remove();
                                
                                for (const candidate of candidates) {
                                    const textVote = candidate['vota'] == '1' ? ' Votë' : ' Vota';
                                    
                                    // Dynamic ID reconstruction
                                    let candidateID = candidate['id']; 
                                    let selector = candidateID {$js_selector_suffix};

                                    $('.joq-poll-item-result.{$class_slug}[data-id='+ selector +']').html(numberWithCommas(candidate['vota']) + textVote);
                                }
                                $('.joq-poll-item-result.{$class_slug}').css('display', 'block');
                            }
                        });
                    });
                    </script>";

                } else {
                    echo "<script>var {$js_enable_var} = false;</script>";
                }
            } else {
                echo '<p>No poll data available.</p>';
                echo "<script>var {$js_enable_var} = false;</script>";
            }
        }
    } else {
        echo 'No polls found.';
    }

    $content = ob_get_contents();
    ob_end_clean();

    // Write content to all specified file paths
    foreach ($file_paths as $path) {
        gliterin_optimizer_legacy_file_put_contents($path, $content);
    }

    // Restore original post data
    wp_reset_postdata();
}

// ==========================================================
// 1. EXECUTE POLL "HEROI"
// ==========================================================
generate_poll_html(array(
    'term_id'       => 122880,
    'class_slug'    => 'heroi',
    'cookie_name'   => '__Start-1PAPISIDJP',
    'js_enable_var' => 'isHeroiEnabled',
    'file_paths'    => array(
        '/var/www/html/joq.al/wordpress/cachedWeb/myAjax/sondazh.html',
        '/var/www/html/joq.al/wordpress/multipleWeb/joqalbania/myAjax/sondazh.html'
    )
));

// ==========================================================
// 2. EXECUTE POLL "HARAMI"
// ==========================================================
generate_poll_html(array(
    'term_id'       => 122881,
    'class_slug'    => 'harami',
    'cookie_name'   => '__Start-1PAPISIDJP2',
    'js_enable_var' => 'isHaramiEnabled',
    'file_paths'    => array(
        '/var/www/html/joq.al/wordpress/cachedWeb/myAjax/sondazh-harami.html',
        '/var/www/html/joq.al/wordpress/multipleWeb/joqalbania/myAjax/sondazh-harami.html'
    )
));

?>