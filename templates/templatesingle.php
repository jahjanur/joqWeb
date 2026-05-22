<script>
    <?php $theID = get_the_ID(); $isAdultNews = get_field( "lajmi_18", $theID );?>
    var resultToBoolean = {
        'Po': true,
        'Jo': false
    };
    var adultNews = resultToBoolean['<?php echo $isAdultNews[0] ?>'];
    var isNews = true;

    <?php $postCat = get_the_category($theID); $encodeCats = json_encode($postCat);?>
    var postCategories = <?php echo $encodeCats ?>;
    var isSport = false;
    var isKosovo = false;
    var isMacedonia = false;
    for (let category of postCategories) {
    	if (category['slug'] === 'sport') {
    		isSport = true;
    		break;
    	} else if (category['slug'] === 'kosova') {
    		isKosovo = true;
    		break;
    	} else if (category['slug'] === 'maqedoni') {
    		isMacedonia = true;
    		break;
    	}
    }
    

    var isMobile = false;
    if (/(android|bb\d+|meego).+mobile|avantgo|bada\/|blackberry|blazer|compal|elaine|fennec|hiptop|iemobile|ip(hone|od)|ipad|iris|kindle|Android|Silk|lge |maemo|midp|mmp|netfront|opera m(ob|in)i|palm( os)?|phone|p(ixi|re)\/|plucker|pocket|psp|series(4|6)0|symbian|treo|up\.(browser|link)|vodafone|wap|windows (ce|phone)|xda|xiino/i.test(navigator.userAgent) ||
        /1207|6310|6590|3gso|4thp|50[1-6]i|770s|802s|a wa|abac|ac(er|oo|s\-)|ai(ko|rn)|al(av|ca|co)|amoi|an(ex|ny|yw)|aptu|ar(ch|go)|as(te|us)|attw|au(di|\-m|r |s )|avan|be(ck|ll|nq)|bi(lb|rd)|bl(ac|az)|br(e|v)w|bumb|bw\-(n|u)|c55\/|capi|ccwa|cdm\-|cell|chtm|cldc|cmd\-|co(mp|nd)|craw|da(it|ll|ng)|dbte|dc\-s|devi|dica|dmob|do(c|p)o|ds(12|\-d)|el(49|ai)|em(l2|ul)|er(ic|k0)|esl8|ez([4-7]0|os|wa|ze)|fetc|fly(\-|_)|g1 u|g560|gene|gf\-5|g\-mo|go(\.w|od)|gr(ad|un)|haie|hcit|hd\-(m|p|t)|hei\-|hi(pt|ta)|hp( i|ip)|hs\-c|ht(c(\-| |_|a|g|p|s|t)|tp)|hu(aw|tc)|i\-(20|go|ma)|i230|iac( |\-|\/)|ibro|idea|ig01|ikom|im1k|inno|ipaq|iris|ja(t|v)a|jbro|jemu|jigs|kddi|keji|kgt( |\/)|klon|kpt |kwc\-|kyo(c|k)|le(no|xi)|lg( g|\/(k|l|u)|50|54|\-[a-w])|libw|lynx|m1\-w|m3ga|m50\/|ma(te|ui|xo)|mc(01|21|ca)|m\-cr|me(rc|ri)|mi(o8|oa|ts)|mmef|mo(01|02|bi|de|do|t(\-| |o|v)|zz)|mt(50|p1|v )|mwbp|mywa|n10[0-2]|n20[2-3]|n30(0|2)|n50(0|2|5)|n7(0(0|1)|10)|ne((c|m)\-|on|tf|wf|wg|wt)|nok(6|i)|nzph|o2im|op(ti|wv)|oran|owg1|p800|pan(a|d|t)|pdxg|pg(13|\-([1-8]|c))|phil|pire|pl(ay|uc)|pn\-2|po(ck|rt|se)|prox|psio|pt\-g|qa\-a|qc(07|12|21|32|60|\-[2-7]|i\-)|qtek|r380|r600|raks|rim9|ro(ve|zo)|s55\/|sa(ge|ma|mm|ms|ny|va)|sc(01|h\-|oo|p\-)|sdk\/|se(c(\-|0|1)|47|mc|nd|ri)|sgh\-|shar|sie(\-|m)|sk\-0|sl(45|id)|sm(al|ar|b3|it|t5)|so(ft|ny)|sp(01|h\-|v\-|v )|sy(01|mb)|t2(18|50)|t6(00|10|18)|ta(gt|lk)|tcl\-|tdg\-|tel(i|m)|tim\-|t\-mo|to(pl|sh)|ts(70|m\-|m3|m5)|tx\-9|up(\.b|g1|si)|utst|v400|v750|veri|vi(rg|te)|vk(40|5[0-3]|\-v)|vm40|voda|vulc|vx(52|53|60|61|70|80|81|83|85|98)|w3c(\-| )|webc|whit|wi(g |nc|nw)|wmlb|wonu|x700|yas\-|your|zeto|zte\-/i.test(navigator.userAgent.substr(0, 4))) isMobile = true;

</script>



<div class="adult_content"></div>

<div id="nimi-tv"></div>

<div id="t3-mainbody" class="container t3-mainbody one-sidebar-right">
    <div class="row">

        <div class="mobile_only" style="text-align: center; height:auto; margin:0 auto 5px;">
            <div id="mgid-mob-top"></div>
        </div>

        <div class="mobile_only" style="text-align: center; height:auto; margin:0 auto 5px;">
            <div class="adunit-1" data-adunit="app_joq__1" data-dimensions="300x100"></div>
        </div>

        <div class="mobile_only" style="text-align: center; height:auto; margin:0 auto 5px;">
            <div class="adunit-1" data-adunit="app_joq__2" data-dimensions="300x100"></div>
        </div>

        <div class="mobile_only" style="text-align: center; height:auto; margin:0 auto 5px;">
            <div class="adunit-1" data-adunit="app_joq__3" data-dimensions="300x100"></div>
        </div>

        <div class="mobile_only" style="text-align: center; height:auto; margin:0 auto 5px;">
            <div class="adunit-1" data-adunit="app_joq__4" data-dimensions="300x100"></div>
        </div>

        <div class="mobile_only" style="text-align: center; height:auto; margin:0 auto 5px;">
            <div class="adunit-1" data-adunit="app_joq__5" data-dimensions="300x100"></div>
        </div>



        <div class="pc_only" style="width:728px; margin: 0 auto 5px; max-height: 90px;">
            <div class="adunit-1" data-adunit="joq__leaderboard" data-dimensions="728x90" style="width:728px; height:90px;"></div>
        </div>
        <!--<div class="pc_only" style="width:728px; margin: 0 auto 5px; max-height: 90px;">
			<div class="adunit-1" data-adunit="joq__PC-Leaderboard-3" data-dimensions="728x90" style="width:728px; height:90px;"></div>
		</div>-->

        <div id="t3-content" class="t3-content col-xs-12 col-sm-12  col-md-8">
            <div class="fixed_left_banner inNews_fixed_left_banner fixed_left_staticBanner pc_only">
                <div class="adunit-1" data-adunit="joq__floating-left" data-dimensions="160x600" style="width:160px; height:600px;"></div>
            </div>
            <div id="system-message-container"></div>
            <span id="startOfPageId1998"></span>
            <div class="pc_only">
                <div class="adunit-1" data-adunit="joq__PC-600x100-1" data-dimensions="600x100"></div>
            </div>
            <div id="k2Container" class="itemView  aqua">
                <div class="social-vertical">
                </div>
                <div class="itemHeader">
                    <h2 class="itemTitle">
                        <?php echo the_title(); ?>

                        <div class="theDatenew">
                            Shkruar nga: <?php echo get_the_author_meta('first_name') ?> <?php echo get_the_author_meta('last_name') ?> |
                            Publikuar m&euml;: <?php echo  get_the_date( 'd/m/Y G:i' );?>

                            <?php if (get_field('english_news_id')) { ?>
                            <a style="float: right;" href="https://joq-albania.com/artikull/<?php echo get_field('english_news_id'); ?>.html">
                                Read in english
                            </a>
                            <?php } ?>
                            

                        </div>

                        <div class="mobile_only" style="text-align: center; height:auto; margin:5px auto 0;">
                            <div class="adunit-1" data-adunit="app_joq__8" data-dimensions="300x100"></div>
                        </div>

                        <div class="mobile_only" style="text-align: center; height:auto; margin:5px auto 0;">
                            <div class="adunit-1" data-adunit="app_joq__7" data-dimensions="300x100"></div>
                        </div>

                        <div class="mobile_only" style="text-align: center; height:auto; margin:0 auto 5px;">
                            <div class="adunit-1" data-adunit="app_joq__12" data-dimensions="300x100"></div>
                        </div>

                        <div class="mobile_only" style="text-align: center; height:auto; margin:0 auto 5px;">
                            <div class="adunit-1" data-adunit="app_joq__10" data-dimensions="300x100"></div>
                        </div>

                    </h2>
                </div>
                <div class="itemBody">
                    <div class="search-wrapper" style="width: 320px">
                        <ul class="rrssb-buttons clearfix">
                            <li class="rrssb-facebook">
                                <a href="https://facebook.com/JETAOSHQEF" class="popup">
                                    <span class="rrssb-icon"><svg xmlns="https://w3.org/2000/svg" viewBox="0 0 29 29">
                                            <path d="M26.4 0H2.6C1.714 0 0 1.715 0 2.6v23.8c0 .884 1.715 2.6 2.6 2.6h12.393V17.988h-3.996v-3.98h3.997v-3.062c0-3.746 2.835-5.97 6.177-5.97 1.6 0 2.444.173 2.845.226v3.792H21.18c-1.817 0-2.156.9-2.156 2.168v2.847h5.045l-.66 3.978h-4.386V29H26.4c.884 0 2.6-1.716 2.6-2.6V2.6c0-.885-1.716-2.6-2.6-2.6z" /></svg></span>
                                    <span class="rrssb-text">Share</span>
                                </a>
                            </li>
                            <li class="rrssb-twitter">
                                <a href="https://twitter.com/jetaoshqefal" class="popup">
                                    <span class="rrssb-icon"><svg xmlns="https://w3.org/2000/svg" viewBox="0 0 28 28">
                                            <path d="M24.253 8.756C24.69 17.08 18.297 24.182 9.97 24.62a15.093 15.093 0 0 1-8.86-2.32c2.702.18 5.375-.648 7.507-2.32a5.417 5.417 0 0 1-4.49-3.64c.802.13 1.62.077 2.4-.154a5.416 5.416 0 0 1-4.412-5.11 5.43 5.43 0 0 0 2.168.387A5.416 5.416 0 0 1 2.89 4.498a15.09 15.09 0 0 0 10.913 5.573 5.185 5.185 0 0 1 3.434-6.48 5.18 5.18 0 0 1 5.546 1.682 9.076 9.076 0 0 0 3.33-1.317 5.038 5.038 0 0 1-2.4 2.942 9.068 9.068 0 0 0 3.02-.85 5.05 5.05 0 0 1-2.48 2.71z" /></svg></span>
                                    <span class="rrssb-text">Share</span>
                                </a>
                            </li>
                            <li class="rrssb-newEntry mobile_only">
                                <a id="shareWhatsapp" style="background-color: #1bd741;">
                                    <span class="rrssb-icon newIcon">
                                        <svg version="1.1" id="Capa_1" xmlns="https://w3.org/2000/svg" xmlns:xlink="https://w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 455.731 455.731" style="enable-background:new 0 0 455.731 455.731;" xml:space="preserve">
                                            <g>
                                                <rect x="0" y="0" style="fill:#1BD741;" width="455.731" height="455.731" />
                                                <g>
                                                    <path style="fill:#FFFFFF;" d="M68.494,387.41l22.323-79.284c-14.355-24.387-21.913-52.134-21.913-80.638
														c0-87.765,71.402-159.167,159.167-159.167s159.166,71.402,159.166,159.167c0,87.765-71.401,159.167-159.166,159.167
														c-27.347,0-54.125-7-77.814-20.292L68.494,387.41z M154.437,337.406l4.872,2.975c20.654,12.609,44.432,19.274,68.762,19.274
														c72.877,0,132.166-59.29,132.166-132.167S300.948,95.321,228.071,95.321S95.904,154.611,95.904,227.488
														c0,25.393,7.217,50.052,20.869,71.311l3.281,5.109l-12.855,45.658L154.437,337.406z" />
                                                    <path style="fill:#FFFFFF;" d="M183.359,153.407l-10.328-0.563c-3.244-0.177-6.426,0.907-8.878,3.037
															c-5.007,4.348-13.013,12.754-15.472,23.708c-3.667,16.333,2,36.333,16.667,56.333c14.667,20,42,52,90.333,65.667
															c15.575,4.404,27.827,1.435,37.28-4.612c7.487-4.789,12.648-12.476,14.508-21.166l1.649-7.702c0.524-2.448-0.719-4.932-2.993-5.98
															l-34.905-16.089c-2.266-1.044-4.953-0.384-6.477,1.591l-13.703,17.764c-1.035,1.342-2.807,1.874-4.407,1.312
															c-9.384-3.298-40.818-16.463-58.066-49.687c-0.748-1.441-0.562-3.19,0.499-4.419l13.096-15.15
															c1.338-1.547,1.676-3.722,0.872-5.602l-15.046-35.201C187.187,154.774,185.392,153.518,183.359,153.407z" />
                                                </g>
                                            </g>
                                        </svg>
                                    </span>
                                    <span class="rrssb-text">Share</span>
                                </a>
                                <script>
                                    var whatsappID = "shareWhatsapp";
                                    document.getElementById(whatsappID).setAttribute('href', "whatsapp://send?text=" + encodeURIComponent(window.location.href));

                                </script>
                            </li>
                            <li class="rrssb-newEntry mobile_only">
                                <a id="shareViber" style="background-color: #7d3daf;">
                                    <span class="rrssb-icon newIcon">
                                        <svg version="1.1" id="Capa_1" xmlns="https://w3.org/2000/svg" xmlns:xlink="https://w3.org/1999/xlink" x="0px" y="0px" width="25px" height="25px" viewBox="0 0 455.731 455.731" style="enable-background:new 0 0 455.731 455.731;" xml:space="preserve">
                                            <g>
                                                <rect x="0" y="0" style="fill:#7D3DAF;" width="455.731" height="455.731" />
                                                <g>
                                                    <path style="fill:#FFFFFF;" d="M371.996,146.901l-0.09-0.36c-7.28-29.43-40.1-61.01-70.24-67.58l-0.34-0.07
																c-48.75-9.3-98.18-9.3-146.92,0l-0.35,0.07c-30.13,6.57-62.95,38.15-70.24,67.58l-0.08,0.36c-9,41.1-9,82.78,0,123.88l0.08,0.36
																c6.979,28.174,37.355,58.303,66.37,66.589v32.852c0,11.89,14.49,17.73,22.73,9.15l33.285-34.599
																c7.219,0.404,14.442,0.629,21.665,0.629c24.54,0,49.09-2.32,73.46-6.97l0.34-0.07c30.14-6.57,62.96-38.15,70.24-67.58l0.09-0.36
																C380.996,229.681,380.996,188.001,371.996,146.901z M345.656,264.821c-4.86,19.2-29.78,43.07-49.58,47.48
																c-25.921,4.929-52.047,7.036-78.147,6.313c-0.519-0.014-1.018,0.187-1.38,0.559c-3.704,3.802-24.303,24.948-24.303,24.948
																l-25.85,26.53c-1.89,1.97-5.21,0.63-5.21-2.09v-54.422c0-0.899-0.642-1.663-1.525-1.836c-0.005-0.001-0.01-0.002-0.015-0.003
																c-19.8-4.41-44.71-28.28-49.58-47.48c-8.1-37.15-8.1-74.81,0-111.96c4.87-19.2,29.78-43.07,49.58-47.48
																c45.27-8.61,91.17-8.61,136.43,0c19.81,4.41,44.72,28.28,49.58,47.48C353.765,190.011,353.765,227.671,345.656,264.821z" />
                                                    <path style="fill:#FFFFFF;" d="M270.937,289.942c-3.044-0.924-5.945-1.545-8.639-2.663
																	c-27.916-11.582-53.608-26.524-73.959-49.429c-11.573-13.025-20.631-27.73-28.288-43.292c-3.631-7.38-6.691-15.049-9.81-22.668
																	c-2.844-6.948,1.345-14.126,5.756-19.361c4.139-4.913,9.465-8.673,15.233-11.444c4.502-2.163,8.943-0.916,12.231,2.9
																	c7.108,8.25,13.637,16.922,18.924,26.485c3.251,5.882,2.359,13.072-3.533,17.075c-1.432,0.973-2.737,2.115-4.071,3.214
																	c-1.17,0.963-2.271,1.936-3.073,3.24c-1.466,2.386-1.536,5.2-0.592,7.794c7.266,19.968,19.513,35.495,39.611,43.858
																	c3.216,1.338,6.446,2.896,10.151,2.464c6.205-0.725,8.214-7.531,12.562-11.087c4.25-3.475,9.681-3.521,14.259-0.624
																	c4.579,2.898,9.018,6.009,13.43,9.153c4.331,3.086,8.643,6.105,12.638,9.623c3.841,3.383,5.164,7.821,3.001,12.412
																	c-3.96,8.408-9.722,15.403-18.034,19.868C276.387,288.719,273.584,289.127,270.937,289.942
																	C267.893,289.017,273.584,289.127,270.937,289.942z" />
                                                    <path style="fill:#FFFFFF;" d="M227.942,131.471c36.515,1.023,66.506,25.256,72.933,61.356c1.095,6.151,1.485,12.44,1.972,18.683
																		c0.205,2.626-1.282,5.121-4.116,5.155c-2.927,0.035-4.244-2.414-4.434-5.039c-0.376-5.196-0.637-10.415-1.353-15.568
																		c-3.78-27.201-25.47-49.705-52.545-54.534c-4.074-0.727-8.244-0.918-12.371-1.351c-2.609-0.274-6.026-0.432-6.604-3.675
																		c-0.485-2.719,1.81-4.884,4.399-5.023C226.527,131.436,227.235,131.468,227.942,131.471
																		C264.457,132.494,227.235,131.468,227.942,131.471z" />
                                                    <path style="fill:#FFFFFF;" d="M283.434,203.407c-0.06,0.456-0.092,1.528-0.359,2.538c-0.969,3.666-6.527,4.125-7.807,0.425
																			c-0.379-1.098-0.436-2.347-0.438-3.529c-0.013-7.734-1.694-15.46-5.594-22.189c-4.009-6.916-10.134-12.73-17.318-16.248
																			c-4.344-2.127-9.042-3.449-13.803-4.237c-2.081-0.344-4.184-0.553-6.275-0.844c-2.534-0.352-3.887-1.967-3.767-4.464
																			c0.112-2.34,1.822-4.023,4.372-3.879c8.38,0.476,16.474,2.287,23.924,6.232c15.15,8.023,23.804,20.687,26.33,37.597
																			c0.114,0.766,0.298,1.525,0.356,2.294C283.198,199.002,283.288,200.903,283.434,203.407
																			C283.374,203.863,283.288,200.903,283.434,203.407z" />
                                                    <path style="fill:#FFFFFF;" d="M260.722,202.523c-3.055,0.055-4.69-1.636-5.005-4.437c-0.219-1.953-0.392-3.932-0.858-5.832
																				c-0.918-3.742-2.907-7.21-6.055-9.503c-1.486-1.083-3.17-1.872-4.934-2.381c-2.241-0.647-4.568-0.469-6.804-1.017
																				c-2.428-0.595-3.771-2.561-3.389-4.839c0.347-2.073,2.364-3.691,4.629-3.527c14.157,1.022,24.275,8.341,25.719,25.007
																				c0.102,1.176,0.222,2.419-0.039,3.544C263.539,201.464,262.113,202.429,260.722,202.523
																				C257.667,202.578,262.113,202.429,260.722,202.523z" />
                                                </g>
                                            </g>
                                        </svg>
                                    </span>
                                    <span class="rrssb-text">Share</span>
                                </a>
                                <script>
                                    var viberID = "shareViber";
                                    document.getElementById(viberID).setAttribute('href', "viber://forward?text=" + encodeURIComponent(window.location.href));

                                </script>
                            </li>
                        </ul>
                    </div>

                    <div class="mobile_only" style="text-align: center; height:auto; margin:0 auto 5px;">
                        <div class="adunit-1" data-adunit="app_joq__9" data-dimensions="300x100"></div>
                    </div>

                    <div class="itemIntroText">
                        <a name="itemVideoAnchor" id="itemVideoAnchor"></a>


                        <?php echo the_content(); ?>


                        <!-- Fotogaleri -->
                        <?php $photoArr =  get_field('fotogaleri-am');

                        if( $photoArr ): ?>

                        <div class="clear"></div>
                        <a name="fotogaleriStart"></a>
                        <div class="clear"></div>

                        <div id="img_gal" class="img_gal">

                            <div class="img_div"></div>

                            <div class="img_desc"></div>

                            <div class="left_arrow"></div>
                            <div class="img_counter"></div>
                            <div class="right_arrow"></div>
                            <div class="clear"></div>

                        </div>

                        <style>
                            hr {
                                margin-top: 0;
                            }

                        </style>

                        <script>
                            //photogallery
                            var allPhotos = [];

                            <?php foreach( $photoArr as $photo ): ?>
                            allPhotos.push('<?php echo fix_photogallery_image($photo['url']) ?>---***---<?php echo $photo['description'] ?>'.replace("https://joq-albania.com/imagesNew", "https://static.joq-albania.com/imagesNew"));
                            <?php endforeach; ?>

                            //Image Slider 
                            if (typeof allPhotos !== 'undefined') {
                                var photo = allPhotos;
                                //photo.push('Taboola/End/Gallery/am_sys21');
                                var maxPhotos = Number(photo.length);
                                var thehash;


                                if (window.location.href.indexOf("#fotogaleriStart") > -1) {
                                    thehash = window.location.search.slice(1);
                                } else {
                                    thehash = 0;
                                }

                                if (!photo[thehash]) {
                                    thehash = 0;
                                }

                                var defaultPhoto = photo[thehash];
                                var defaultPhoto1 = defaultPhoto.split("---***---");
                                defaultPhoto1[0];

                                var nextArr = Number(thehash) + 1;
                                var prevArr = Number(thehash) - 1;
                                var currUrl = window.location.href.split('?')[0];

                                if (thehash == 0) {
                                    prevArr = maxPhotos - 1;
                                }
                                if (thehash == maxPhotos - 1) {
                                    nextArr = 0;
                                }

                                var currPhoto = Number(thehash);
                                if (currPhoto == null) {
                                    currPhoto = currPhoto + 1;
                                } else {
                                    currPhoto = currPhoto + 1;
                                }

                                if (defaultPhoto1[0].indexOf('am_sys21') > -1) {

                                    console.log('taboola sys');

                                    $(".img_desc").html(defaultPhoto1[1]);
                                    $(".right_arrow").html('<a href="' + currUrl + '?' + nextArr + '#fotogaleriStart"> Para </a>');
                                    $(".img_counter").html('Foto ' + currPhoto + ' nga ' + maxPhotos + '');
                                    $(".left_arrow").html('<a href="' + currUrl + '?' + prevArr + '#fotogaleriStart"> Pas </a>');
                                } else {
                                    var tmpImg = new Image();
                                    tmpImg.src = defaultPhoto1[0]; //or  document.images[i].src;
                                    $(tmpImg).one('load', function() {
                                        orgWidth = tmpImg.width;
                                        orgHeight = tmpImg.height;


                                        console.log('photo sys');
                                        $(".img_div").html('<a class="fancybox" href="' + defaultPhoto1[0] + '" data-fancybox-group="gallery" title="' + defaultPhoto1[1] + '"><img id="imageSlider"  src="' + defaultPhoto1[0] + '"></a>');

                                        $(".img_desc").html(defaultPhoto1[1]);
                                        $(".right_arrow").html('<a href="' + currUrl + '?' + nextArr + '#fotogaleriStart"> Para </a>');
                                        $(".img_counter").html('Foto ' + currPhoto + ' nga ' + maxPhotos + '');
                                        $(".left_arrow").html('<a href="' + currUrl + '?' + prevArr + '#fotogaleriStart"> Pas </a>');


                                    });
                                }

                                $('.fancybox').fancybox({
                                    padding: 0,
                                    openEffect: 'none',
                                    closeEffect: 'none',
                                    closeClick: true,
                                    helpers: {
                                        overlay: {
                                            css: {
                                                'background': 'rgba(0,0,0,0.85)'
                                            }
                                        }
                                    }
                                });

                            }

                        </script>

                        <?php endif; ?>
                        <!-- End Image Slider -->


                        <div class="mobile_only" style="width:300px; height:auto; margin: 0 auto 5px;">
                            <!-- /194204832/adxp_jetaoshqef_300x250_1_HB 
														<div id='div-gpt-ad-1543245372331-0' style='height:250px; width:300px;'>
															<script>
																if (isMobile) {
																	$.post("https://dynamic2.joq-albania.com/country", function (data) {
											                			var rc_country = JSON.parse(data).country;
											                			if (rc_country != 'AL' && rc_country != '') {
											                				googletag.cmd.push(function() { googletag.display('div-gpt-ad-1543245372331-0'); });
											                			}
											                		});
																}
															</script>
														</div>-->
                        </div>

                       <!--  <div style="clear: both;" class="mobile_only">

                            
							<style type="text/css">
                                .joq-poll-wrapper {
                                    margin-bottom: 20px;
                                }
                              .joq-poll-wrapper li {
                                display: block;
                                border: solid 1px #ddd;
                                padding: 14px 14px 8px;
                                margin-bottom: 10px;
                                position: relative;
                                color: #fff;
                              }
                              .joq-poll-wrapper li .perc-back {
                                background: #d2dfe5;
                                position: absolute;
                                top: 0;
                                bottom: 0;
                                left: 0;
                                width: 100%;
                                transition: width .3s linear;
                                z-index: -1;
                              }

                              .joq-poll-wrapper button {
                                float: right;
                                background: #000;
                                border: none;
                                border-radius: 3px;
                                color: #fff;
                                padding: 0 30px;
                                font-size: 20px;
                                outline: none;
                                line-height: 40px;
                              }

                              .joq-poll-wrapper input {
                                display: none;
                              }

                              .joq-poll-wrapper label {
                                vertical-align: middle;
                                cursor: pointer;
                                line-height: 16px;
                                overflow: hidden;
                                padding: 5px;
                                margin-left: 25px;
                                background: #000;
                                border-radius: 4px;
                                font-weight: 300;
                              }
                              .joq-poll-wrapper label:before {
                                content: url("https://static.joq-albania.com/assets/images/qna-radio-off.png");
                                overflow: hidden;
                                display: inline-block;
                                position: absolute;
                                left: 10px;
                                top: 15px;
                              }

                              .joq-poll-wrapper input[type=radio]:checked + label:before {
                                content: url("https://static.joq-albania.com/assets/images/qna-radio-on.png");
                              }

                              .joq-poll-wrapper li.correct label:before {
                                content: url("https://static.joq-albania.com/assets/images/qna-correct.png");
                              }

                              .joq-poll-wrapper li.correct input[type=radio]:checked + label:before {
                                content: url("https://static.joq-albania.com/assets/images/qna-correct.png");
                              }

                              .joq-poll-wrapper .perc-number {
                                float: right;
                                color: #333;
                                font-weight: bold;
                              }

                                .joq-poll-title-v2 {
                                    font-size: 22px;
                                    padding: 15px;
                                    background: #000;
                                    color: #fff;
                                }

                              .joq-poll-wrapper #joq-poll-button-wrapper {
                                  float: right;
                                  background: #000;
                                  border: none;
                                  border-radius: 3px;
                                  color: #fff;
                                  padding: 0 30px;
                                  font-size: 20px;
                                  line-height: 40px;
                              }
                            </style>
                            <script src="https://www.google.com/recaptcha/api.js?render=6LfVhcgUAAAAAJYIeY9PTaOd2nLrAqyArP-5_DUN"></script>

                            <div class="joq-poll-title-v2">KË DO VOTONI MË 25 PRILL?</div>

                            <div class="joq-poll-wrapper">
                              <li>
                                <span id="width-1" class="perc-back" style="background-color: #b821b3;"></span>
                                <input type="radio" name="voto" id="answer1" value="1">
                                <label for="answer1">PS <span id="vote-1">  </span> </label>
                                <span id="perc-1" class="perc-number"></span>
                              </li>
                              <li data-id="2">
                                <span id="width-2" class="perc-back" style="background-color: #274472;"></span>
                                <input type="radio" name="voto" id="answer2" value="2">
                                <label for="answer2">PD <span id="vote-2">  </span> </label>
                                <span id="perc-2" class="perc-number"></span>
                              </li>
                              <li data-id="3">
                                <span id="width-3" class="perc-back" style="background-color: #d9242e;"></span>
                                <input type="radio" name="voto" id="answer3" value="3">
                                <label for="answer3">LSI <span id="vote-3">  </span> </label>
                                <span id="perc-3" class="perc-number"></span>
                              </li>
                              <li data-id="4">
                                <span id="width-4" class="perc-back" style="background-color: #ccc;"></span>
                                <input type="radio" name="voto" id="answer4" value="4">
                                <label for="answer4">NUK VOTOJ <span id="vote-4">  </span> </label>
                                <span id="perc-4" class="perc-number"></span>
                              </li>
                              <div id="joq-poll-button-wrapper">
                                <button id="joq-poll-button">Voto</button>
                              </div>
                              <div class="clr"></div>
                            </div>
                            <script type="text/javascript">

                            	if ($( window ).width() <= 768) {

                            		function setCookie(cname, cvalue, days) {
		                                const d = new Date();
		                                d.setTime(d.getTime() + (days * 24 * 60 * 60 * 1000));
		                                const expires = "expires=" + d.toUTCString();
		                                document.cookie = cname + "=" + cvalue + ";" + expires + ";path=/";
		                              }

		                              function getCookie(cname) {
		                                const name = cname + "=";
		                                const decodedCookie = decodeURIComponent(document.cookie);
		                                const ca = decodedCookie.split(';');
		                                for (let i = 0; i < ca.length; i++) {
		                                  let c = ca[i];
		                                  while (c.charAt(0) == ' ') {
		                                    c = c.substring(1);
		                                  }
		                                  if (c.indexOf(name) == 0) {
		                                    return c.substring(name.length, c.length);
		                                  }
		                                }
		                                return "";
		                              }

		                              if (getCookie('j-p')) {
		                                $('#joq-poll-button-wrapper').html('...');
		                                $.post( "https://gameselect.net/gameselect.net/polls/db.php", { meta_key: false})
		                                  .done(function( data ) {
		                                    console.log(data);
		                                    if (data) {
		                                      $('#joq-poll-button-wrapper').html('Rezultatet');
		                                      let totalVotes = 0;
		                                      for (const vote of data) {
		                                        if (vote['meta_value']) {
		                                          totalVotes += Number(vote['meta_value']);
		                                        }
		                                      }
		                                      for (const vote of data) {
		                                      	const stringVotes = vote['meta_value'] ? vote['meta_value'].toString().replace(/\B(?=(\d{3})+(?!\d))/g, ',') : 0;
		                                        $('#perc-' + vote['meta_key']).html('(' + stringVotes + ' vota) ' + Math.round(Number(vote['meta_value']) / totalVotes * 100) + '%');
		                                        $('#width-' + vote['meta_key']).css('width', Math.round(Number(vote['meta_value']) / totalVotes * 100) + '%');
		                                      }
		                                    }
		                                });
		                              }

		                              $('#joq-poll-button').on('click', function() {

		                                 grecaptcha.execute('6LfVhcgUAAAAAJYIeY9PTaOd2nLrAqyArP-5_DUN').then((token) => {

		                                  console.log($('input[name="voto"]:checked').val());
		                                  $('#joq-poll-button').html('...');
		                                  $.post( "https://gameselect.net/gameselect.net/polls/db.php", { 'meta_key': $('input[name="voto"]:checked').val(), 'response': token})
		                                    .done(function( data ) {
		                                      console.log(data);
		                                      if (data) {
		                                        setCookie('j-p', '1', 60);
		                                        $('#joq-poll-button-wrapper').html('Faleminderit');
		                                        let totalVotes = 0;
		                                        for (const vote of data) {
		                                          if (vote['meta_value']) {
		                                            totalVotes += Number(vote['meta_value']);
		                                          }
		                                        }
		                                        for (const vote of data) {
		                                        	const stringVotes = vote['meta_value'] ? vote['meta_value'].toString().replace(/\B(?=(\d{3})+(?!\d))/g, ',') : 0;
		                                          $('#perc-' + vote['meta_key']).html('(' + stringVotes + ' vota) ' + Math.round(Number(vote['meta_value']) / totalVotes * 100) + '%');
		                                          $('#width-' + vote['meta_key']).css('width', Math.round(Number(vote['meta_value']) / totalVotes * 100) + '%');
		                                        }
		                                      }
		                                  });

		                                 });

		                              });

                            	}

                              
                            </script>
                            <div class="clr"></div>

                        </div> -->


                        <div class="mobile_only" style="text-align: center; height:auto; margin:0 auto 5px;">
                            <div class="adunit-1" data-adunit="joq__MOB-300x250-first" data-dimensions="300x250"></div>
                        </div> 

                        <div class="mobile_only" style="max-width: 300px; margin: 20px auto 3px; position: relative; top: -8px;">
                            <div id="rcjsload_c1f2ce"></div>
                        </div>

                        <div class="pc_only">
			                <div class="adunit-1" data-adunit="joq__PC-600x100-2" data-dimensions="600x100"></div>
			            </div>


                        <div class="pc_only" style="margin-top: 10px;">
                            <div id="pc-under-news"></div>
                        </div>
                        

                        <div class="mobile_only" style=" margin: 0 auto 3px; position: relative; top: -7px">
                            <div id="photogallery_pos2"></div>
                            <div id="photogallery_pos3"></div>
                        </div>

                        <div class="mobile_only" style="text-align: center; height:auto; margin:0 auto 5px;">
                        	<div id="ytb-1"></div>
                        </div>

                        <div class="mobile_only" style="text-align: center; height:auto; margin:0 auto 5px;">
                            <div class="adunit-1" data-adunit="joq__PC-300x250-7" data-dimensions="300x250"></div>
                        </div> 
                        
                        <div class="mobile_only" style="text-align: center; height:auto; margin:0 auto 5px;">
                            <div class="adunit-1" data-adunit="app_joq__6" data-dimensions="300x100"></div>
                        </div>

                        <div class="mobile_only" style="text-align: center; height:auto; margin:0 auto 5px;">
                            <div class="adunit-1" data-adunit="app_joq__13" data-dimensions="300x100"></div>
                        </div>

                        <div class="mobile_only" style="text-align: center; height:auto; margin:0 auto 5px;">
                            <div class="adunit-1" data-adunit="joq__MOB-300x100-second" data-dimensions="300x100"></div>
                        </div>

                        <div class="mobile_only" style="text-align: center; height:auto; margin:0 auto 5px;">
                            <div class="adunit-1" data-adunit="app_joq__11" data-dimensions="300x100"></div>
                        </div>


                        

                        
                    </div>
                    <div class="clr"></div>
                </div>
                <div class="clr"></div>
            </div>
        </div>
        <div class="t3-sidebar t3-sidebar-right col-xs-12 col-sm-12  col-md-4 ">
            <div class="fixed_right_banner inNews_fixed_right_banner fixed_right_staticBanner">
                <ins data-revive-zoneid="193" data-revive-id="91644f9a64d5e392cebcc6a660952396"></ins>
                <div class="adunit-1" data-adunit="joq__floating-right" data-dimensions="160x600" style="width:160px; height:600px;"></div>
            </div>
            <div class="t3-module module title-arrow nspText latestnews " id="Mod248">
                <div class="module-inner">
                    <div class="module-ct" id="sticky-elements">


                        <!-- <div class="mob_pc_banners">
	                        <iframe id='a118518c' name='a118518c' src='https://ads.digitalbee.al/www/delivery/afr.php?zoneid=213&amp;cb=INSERT_RANDOM_NUMBER_HERE' frameborder='0' scrolling='no' width='300' height='250' allow='autoplay'><a href='https://ads.digitalbee.al/www/delivery/ck.php?n=a06f00db&amp;cb=INSERT_RANDOM_NUMBER_HERE' target='_blank'><img src='https://ads.digitalbee.al/www/delivery/avw.php?zoneid=213&amp;cb=INSERT_RANDOM_NUMBER_HERE&amp;n=a06f00db' border='0' alt='' /></a></iframe>
	                    </div> -->

                        <div class="pc_only" style="width:300px; height:auto; margin-bottom:5px;">
                            <div class="adunit-1" data-adunit="joq__PC-300x250-5" data-dimensions="300x250" style="width:300px; height:250px;"></div>
                        </div>

						<div class="pc_only" style="width:300px; height:auto; margin-bottom:5px;">
                            <div id="ytb-pc" style="width:300px;"></div>
                        </div>

                        <div class="pc_only" style="width:300px; height:auto; margin-bottom:5px;">
                            <div class="adunit-1" data-adunit="joq__300x250-bottomRight" data-dimensions="300x250" style="width:300px; height:250px;"></div>
                        </div>

                        <div class="ajxLastNews"></div>

                        <div class="pc_only" style="width:300px; height:auto; margin-bottom:5px;">
                            <div class="adunit-1" data-adunit="joq__300x250-4" data-dimensions="300x250" style="width:300px; height:250px;"></div>
                        </div>

                        <div class="pc_only" style="width:300px; height:auto; margin-bottom:5px;">
                            <div class="adunit-1" data-adunit="joq__300x250-3" data-dimensions="300x250" style="width:300px; height:250px;"></div>
                        </div>

                        <div id="joq-banner" class="pc_only" style="width:300px; height:auto; margin-bottom:5px;overflow: hidden;"></div>

                        <!-- <div class="pc_only" style="clear: both;">

                            
							<style type="text/css">
                                .joq-poll-wrapper {
                                    margin-bottom: 20px;
                                }
                              .joq-poll-wrapper li {
                                display: block;
                                border: solid 1px #ddd;
                                padding: 14px 14px 8px;
                                margin-bottom: 10px;
                                position: relative;
                                color: #fff;
                              }
                              .joq-poll-wrapper li .perc-back {
                                background: #d2dfe5;
                                position: absolute;
                                top: 0;
                                bottom: 0;
                                left: 0;
                                width: 100%;
                                transition: width .3s linear;
                                z-index: -1;
                              }

                              .joq-poll-wrapper button {
                                float: right;
                                background: #000;
                                border: none;
                                border-radius: 3px;
                                color: #fff;
                                padding: 0 30px;
                                font-size: 20px;
                                outline: none;
                                line-height: 40px;
                              }

                              .joq-poll-wrapper input {
                                display: none;
                              }

                              .joq-poll-wrapper label {
                                vertical-align: middle;
                                cursor: pointer;
                                line-height: 16px;
                                overflow: hidden;
                                padding: 5px;
                                margin-left: 25px;
                                background: #000;
                                border-radius: 4px;
                                font-weight: 300;
                              }
                              .joq-poll-wrapper label:before {
                                content: url("https://static.joq-albania.com/assets/images/qna-radio-off.png");
                                overflow: hidden;
                                display: inline-block;
                                position: absolute;
                                left: 10px;
                                top: 15px;
                              }

                              .joq-poll-wrapper input[type=radio]:checked + label:before {
                                content: url("https://static.joq-albania.com/assets/images/qna-radio-on.png");
                              }

                              .joq-poll-wrapper li.correct label:before {
                                content: url("https://static.joq-albania.com/assets/images/qna-correct.png");
                              }

                              .joq-poll-wrapper li.correct input[type=radio]:checked + label:before {
                                content: url("https://static.joq-albania.com/assets/images/qna-correct.png");
                              }

                              .joq-poll-wrapper .perc-number {
                                float: right;
                                color: #333;
                                font-weight: bold;
                              }

                                .joq-poll-title-v2 {
                                    font-size: 22px;
                                    padding: 15px;
                                    background: #000;
                                    color: #fff;
                                }

                              .joq-poll-wrapper #pc-joq-poll-button-wrapper {
                                  float: right;
                                  background: #000;
                                  border: none;
                                  border-radius: 3px;
                                  color: #fff;
                                  padding: 0 30px;
                                  font-size: 20px;
                                  line-height: 40px;
                              }
                            </style>
                            <script src="https://www.google.com/recaptcha/api.js?render=6LfVhcgUAAAAAJYIeY9PTaOd2nLrAqyArP-5_DUN"></script>

                            <div class="joq-poll-title-v2">KË DO VOTONI MË 25 PRILL?</div>

                            <div class="joq-poll-wrapper">
                              <li>
                                <span id="pc-width-1" class="perc-back" style="background-color: #b821b3;"></span>
                                <input type="radio" name="voto" id="pc-answer1" value="1">
                                <label for="pc-answer1">PS <span id="pc-vote-1">  </span> </label>
                                <span id="pc-perc-1" class="perc-number"></span>
                              </li>
                              <li data-id="2">
                                <span id="pc-width-2" class="perc-back" style="background-color: #274472;"></span>
                                <input type="radio" name="voto" id="pc-answer2" value="2">
                                <label for="pc-answer2">PD <span id="pc-vote-2">  </span> </label>
                                <span id="pc-perc-2" class="perc-number"></span>
                              </li>
                              <li data-id="3">
                                <span id="pc-width-3" class="perc-back" style="background-color: #d9242e;"></span>
                                <input type="radio" name="voto" id="pc-answer3" value="3">
                                <label for="pc-answer3">LSI <span id="pc-vote-3">  </span> </label>
                                <span id="pc-perc-3" class="perc-number"></span>
                              </li>
                              <li data-id="4">
                                <span id="pc-width-4" class="perc-back" style="background-color: #ccc;"></span>
                                <input type="radio" name="voto" id="pc-answer4" value="4">
                                <label for="pc-answer4">NUK VOTOJ <span id="pc-vote-4">  </span> </label>
                                <span id="pc-perc-4" class="perc-number"></span>
                              </li>
                              <div id="pc-joq-poll-button-wrapper">
                                <button id="pc-joq-poll-button">Voto</button>
                              </div>
                              <div class="clr"></div>
                            </div>
                            <script type="text/javascript">

                            	if ($( window ).width() > 768) {

                            		function setCookie(cname, cvalue, days) {
		                                const d = new Date();
		                                d.setTime(d.getTime() + (days * 24 * 60 * 60 * 1000));
		                                const expires = "expires=" + d.toUTCString();
		                                document.cookie = cname + "=" + cvalue + ";" + expires + ";path=/";
		                              }

		                              function getCookie(cname) {
		                                const name = cname + "=";
		                                const decodedCookie = decodeURIComponent(document.cookie);
		                                const ca = decodedCookie.split(';');
		                                for (let i = 0; i < ca.length; i++) {
		                                  let c = ca[i];
		                                  while (c.charAt(0) == ' ') {
		                                    c = c.substring(1);
		                                  }
		                                  if (c.indexOf(name) == 0) {
		                                    return c.substring(name.length, c.length);
		                                  }
		                                }
		                                return "";
		                              }

		                              if (getCookie('j-p')) {
		                                $('#jpc-oq-poll-button-wrapper').html('...');
		                                $.post( "https://gameselect.net/gameselect.net/polls/db.php", { meta_key: false})
		                                  .done(function( data ) {
		                                    console.log(data);
		                                    if (data) {
		                                      $('#pc-joq-poll-button-wrapper').html('Rezultatet');
		                                      let totalVotes = 0;
		                                      for (const vote of data) {
		                                        if (vote['meta_value']) {
		                                          totalVotes += Number(vote['meta_value']);
		                                        }
		                                      }
		                                      for (const vote of data) {
		                                      	const stringVotes = vote['meta_value'] ? vote['meta_value'].toString().replace(/\B(?=(\d{3})+(?!\d))/g, ',') : 0;
		                                        $('#pc-perc-' + vote['meta_key']).html('(' + stringVotes + ' vota) ' + Math.round(Number(vote['meta_value']) / totalVotes * 100) + '%');
		                                        $('#pc-width-' + vote['meta_key']).css('width', Math.round(Number(vote['meta_value']) / totalVotes * 100) + '%');
		                                      }
		                                    }
		                                });
		                              }

		                              $('#pc-joq-poll-button').on('click', function() {

		                                 grecaptcha.execute('6LfVhcgUAAAAAJYIeY9PTaOd2nLrAqyArP-5_DUN').then((token) => {

		                                  console.log($('input[name="voto"]:checked').val());
		                                  $('#pc-joq-poll-button').html('...');
		                                  $.post( "https://gameselect.net/gameselect.net/polls/db.php", { 'meta_key': $('input[name="voto"]:checked').val(), 'response': token})
		                                    .done(function( data ) {
		                                      console.log(data);
		                                      if (data) {
		                                        setCookie('j-p', '1', 60);
		                                        $('#pc-joq-poll-button-wrapper').html('Faleminderit');
		                                        let totalVotes = 0;
		                                        for (const vote of data) {
		                                          if (vote['meta_value']) {
		                                            totalVotes += Number(vote['meta_value']);
		                                          }
		                                        }
		                                        for (const vote of data) {
		                                        	const stringVotes = vote['meta_value'] ? vote['meta_value'].toString().replace(/\B(?=(\d{3})+(?!\d))/g, ',') : 0;
		                                          $('#pc-perc-' + vote['meta_key']).html('(' + stringVotes + ' vota) ' + Math.round(Number(vote['meta_value']) / totalVotes * 100) + '%');
		                                          $('#pc-width-' + vote['meta_key']).css('width', Math.round(Number(vote['meta_value']) / totalVotes * 100) + '%');
		                                        }
		                                      }
		                                  });

		                                 });

		                              });

                            	}

                              
                            </script>
                            <div class="clr"></div>

                        </div> -->



                        <div class="pc_only" style="width:300px; height:auto; margin-bottom:5px;">
                            <div class="adunit-1" data-adunit="joq__300x250-2" data-dimensions="300x250" style="width:300px; height:250px;"></div>
                        </div>


                        <div id="albsig-pc" class="pc_only" style="width:300px; height:auto; margin-bottom:5px;">
                            <script>
                                if (!isMobile) {
                                    $.post("https://dynamic2.joq-albania.com/country", function(data) {
                                        var rc_country = JSON.parse(data).country;
                                        if (rc_country == 'AL') {
                                            try {
                                                postscribe('#albsig-pc', '<a href="https://facebook.com/albsigalbania/" target="_blank"><img width="300" src="https://static.joq-albania.com/banners/albsig/albsig.gif"></a>');
                                            } catch (e) {}
                                        }
                                    });
                                }

                            </script>
                        </div>


                        <div class="mobile_only" style="width:300px; height:auto; margin:0 auto 5px;">
                            <!-- /194204832/adxp_jetaoshqef_300x250_1_HB 
												<div id='div-gpt-ad-1543245372331-0' style='height:250px; width:300px;'>
													<script>
														googletag.cmd.push(function() { googletag.display('div-gpt-ad-1543245372331-0'); });
													</script>
												</div>-->
                        </div>

                        <div class="pc_only" style="width:300px; height:auto; margin: 0 0 5px 0;">
                            <div class="adunit-1" data-adunit="joq__PC-300x250-last" data-dimensions="300x250" style="width:300px; height:250px;"></div>
                        </div>
                        <!-- <div class="mobile_only" style="width:300px; height:auto; margin:0 auto 5px;">
												<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
												<ins class="adsbygoogle"
												     style="display:inline-block;width:300px;height:250px"
												     data-ad-client="ca-pub-6823290977722273"
												     data-ad-slot="6549693144"></ins>
												<script>
												(adsbygoogle = window.adsbygoogle || []).push({});
												</script>
											</div> -->

                        <!-- <div id="vod-pc" class="pc_only" style="width:300px; height:250px; margin: 0 0 5px 0;">

                        </div> -->


                        <div class="pc_only" style="width:300px; height:auto; margin-bottom:5px;">
                            <div class="adunit-1" data-adunit="joq__MOB-300x250-mid" data-dimensions="300x250" style="width:300px; height:250px;"></div>
                        </div>

                        <!-- <div class="pc_only" style="width:300px; height:auto; margin-bottom:5px;">
												<div class="adunit-1" data-adunit="joq__300x250" data-dimensions="300x250" style="width:300px; height:250px;"></div>
											</div> -->
                        <div style="position: -webkit-sticky;position: sticky;top: 60px;">
                            <div class="pc_only" id="mgid-right-pc" style="width:300px; height:auto; margin-bottom:5px;"></div>
                            <div id="pc-impuls" style="width:300px; height:auto; margin: 0 0 5px 0;"></div>
                            <style type="text/css">
                                .mob_pc_banners {
                                    width: 300px;
                                    margin-bottom: 5px;
                                }

                                @media only screen and (max-width: 768px) {
                                    .mob_pc_banners {
                                        width: 300px;
                                        margin: 0 auto 5px;
                                    }
                                }

                            </style>
                        </div>

                        <div class="pc_only" style="width:300px; height:auto; margin-bottom:5px;">
                          <a href="https://aleancaetike.media/decent-invest-offer-easily/" target="_blank">
                            <img style="width: 100%;" src="/b/ame/300x50/2020-27-10.gif">
                          </a>
                        </div>

                        <div class="pc_only" style="width:300px; height:auto; margin-bottom:5px;">
                            <div class="adunit-1" data-adunit="joq__PC-300x250-1" data-dimensions="300x250"></div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>

    <div id="fixed_728_banner" class="pc_only" style="position: fixed; bottom: 0; width: 728px; left: calc(50% - 364px); height: auto; z-index: 99999;  max-height: 90px; overflow: hidden;">
        <img id="remove_728_banner" src="https://static.joq-albania.com/assets/images/remove_banner.png" style="display: none; position: absolute; right: 0; top: 0; width: 24px; cursor: pointer;">
        <div class="adunit-1" data-adunit="joq__PC-Leaderboard-4" data-dimensions="728x90" style="width:728px; height:90px;"></div>
    </div>
    <style type="text/css">
      div#remove-fcb {
        position: fixed; 
        bottom: 0; 
        width: 320px; 
        left: calc(50% - 160px); 
        height: auto; 
        z-index: 2;
      }
      .custom-rev-123 {
        background-color: #fff;
        box-sizing: border-box;
        border-top: 1px solid #E7E7E7;
        width: 100% !important;
        left: 0px !important;
        padding-top: 0 !important;
      }
    </style>
    <div id="remove-fcb" class="fixedFooter_banner mobile_only custom-rev-123">
      <style>
        #closeBanner_sys400 {
          width: 32px;
          height: 32px;
          background-image: url(https://joq-albania.com/assets/images/remove_banner.png);
          position: absolute;
          right: 0;
          background-color: #fff;
          top: -25px;
          background-size: 20px;
          cursor: pointer;
          z-index: 9;
          background-position: center;
          background-repeat: no-repeat;
          box-shadow: 0px -3px 7px 0px rgba(0, 0, 0, 0.3);
        }
        .mctitle {
            max-height: 43px;
            overflow: hidden;
            text-overflow: ellipsis;
            display: -webkit-box;
            -webkit-line-clamp: 2;
            -webkit-box-orient: vertical;
        }
        .mctitle a {
            font-size: 16px !important;
        }
        #remove-fcb .mgheader {
            display: none !important;
        }
        div#remove-fcb .mgbox .mgline {
		    width: 49% !important;
		    min-height: 0;
		}
      </style>
      <div id="closeBanner_sys400"></div>

      <div id="mgid-footer-2" style="margin-bottom: -20px; padding: 5px 5px 0 5px;box-shadow: 0px -3px 7px 0px rgba(0, 0, 0, 0.3);">
        
      </div>

      <script>
        var closeButton_400 = document.getElementById('closeBanner_sys400');
        var theBanner_400 = document.getElementById('remove-fcb');
        closeButton_400.addEventListener("click",function(e){
         theBanner_400.remove();
        },false);
      </script>
    </div>
</div>
<div id="fb-share" class="mobile_only fixed-fbshare"></div>

<script type="text/javascript">
    $.get("https://dynamic.joq-albania.com/?ID=<?php echo get_the_ID(); ?>&theDate=<?php echo  get_the_date('Y-m-d H:i:s'); ?>", function(data) {
        console.log(data);
    });

</script>
