function appendRevcontent_v1(div_id, rev_id) {
    return (function () {
        var referer = "";
        try {
            if (referer = document.referrer, "undefined" == typeof referer) throw "undefined"
        } catch (exception) {
            referer = document.location.href, ("" == referer || "undefined" == typeof referer) && (referer = document.URL)
        }
        referer = referer.substr(0, 700);
        var rcel = document.createElement("script");
        rcel.id = 'rc_' + Math.floor(Math.random() * 1000);
        rcel.type = 'text/javascript';
        rcel.src = "https://trends.revcontent.com/serve.js.php?w=" + rev_id + "&t=" + rcel.id + "&c=" + (new Date()).getTime() + "&width=" + (window.outerWidth || document.documentElement.clientWidth) + "&referer=" + referer;
        rcel.async = true;
        var rcds = document.getElementById(div_id);
        rcds.appendChild(rcel);
    })();
}


function sendEvent(link) {


    let xhr = new XMLHttpRequest();
    xhr.open("GET", link);
    xhr.send();
    xhr.onreadystatechange = function () {
        if (xhr.readyState === 4) {
            if (xhr.responseText) {

            }
        }
    }


}



$(document).ready(function () {

    var closeButton_400 = document.getElementById('closeBanner_sys400');
    var mobFixedFooter = document.getElementById('mob-fixed-footer');
    if (closeButton_400 && mobFixedFooter) {
        closeButton_400.addEventListener("click", function(e){
            mobFixedFooter.remove();
        }, false);
    }



    var hasPhotoGallery = (typeof allPhotos !== 'undefined');




    var isMobile = false;
    if (/(android|bb\d+|meego).+mobile|avantgo|bada\/|blackberry|blazer|compal|elaine|fennec|hiptop|iemobile|ip(hone|od)|ipad|iris|kindle|Android|Silk|lge |maemo|midp|mmp|netfront|opera m(ob|in)i|palm( os)?|phone|p(ixi|re)\/|plucker|pocket|psp|series(4|6)0|symbian|treo|up\.(browser|link)|vodafone|wap|windows (ce|phone)|xda|xiino/i.test(navigator.userAgent) ||
        /1207|6310|6590|3gso|4thp|50[1-6]i|770s|802s|a wa|abac|ac(er|oo|s\-)|ai(ko|rn)|al(av|ca|co)|amoi|an(ex|ny|yw)|aptu|ar(ch|go)|as(te|us)|attw|au(di|\-m|r |s )|avan|be(ck|ll|nq)|bi(lb|rd)|bl(ac|az)|br(e|v)w|bumb|bw\-(n|u)|c55\/|capi|ccwa|cdm\-|cell|chtm|cldc|cmd\-|co(mp|nd)|craw|da(it|ll|ng)|dbte|dc\-s|devi|dica|dmob|do(c|p)o|ds(12|\-d)|el(49|ai)|em(l2|ul)|er(ic|k0)|esl8|ez([4-7]0|os|wa|ze)|fetc|fly(\-|_)|g1 u|g560|gene|gf\-5|g\-mo|go(\.w|od)|gr(ad|un)|haie|hcit|hd\-(m|p|t)|hei\-|hi(pt|ta)|hp( i|ip)|hs\-c|ht(c(\-| |_|a|g|p|s|t)|tp)|hu(aw|tc)|i\-(20|go|ma)|i230|iac( |\-|\/)|ibro|idea|ig01|ikom|im1k|inno|ipaq|iris|ja(t|v)a|jbro|jemu|jigs|kddi|keji|kgt( |\/)|klon|kpt |kwc\-|kyo(c|k)|le(no|xi)|lg( g|\/(k|l|u)|50|54|\-[a-w])|libw|lynx|m1\-w|m3ga|m50\/|ma(te|ui|xo)|mc(01|21|ca)|m\-cr|me(rc|ri)|mi(o8|oa|ts)|mmef|mo(01|02|bi|de|do|t(\-| |o|v)|zz)|mt(50|p1|v )|mwbp|mywa|n10[0-2]|n20[2-3]|n30(0|2)|n50(0|2|5)|n7(0(0|1)|10)|ne((c|m)\-|on|tf|wf|wg|wt)|nok(6|i)|nzph|o2im|op(ti|wv)|oran|owg1|p800|pan(a|d|t)|pdxg|pg(13|\-([1-8]|c))|phil|pire|pl(ay|uc)|pn\-2|po(ck|rt|se)|prox|psio|pt\-g|qa\-a|qc(07|12|21|32|60|\-[2-7]|i\-)|qtek|r380|r600|raks|rim9|ro(ve|zo)|s55\/|sa(ge|ma|mm|ms|ny|va)|sc(01|h\-|oo|p\-)|sdk\/|se(c(\-|0|1)|47|mc|nd|ri)|sgh\-|shar|sie(\-|m)|sk\-0|sl(45|id)|sm(al|ar|b3|it|t5)|so(ft|ny)|sp(01|h\-|v\-|v )|sy(01|mb)|t2(18|50)|t6(00|10|18)|ta(gt|lk)|tcl\-|tdg\-|tel(i|m)|tim\-|t\-mo|to(pl|sh)|ts(70|m\-|m3|m5)|tx\-9|up(\.b|g1|si)|utst|v400|v750|veri|vi(rg|te)|vk(40|5[0-3]|\-v)|vm40|voda|vulc|vx(52|53|60|61|70|80|81|83|85|98)|w3c(\-| )|webc|whit|wi(g |nc|nw)|wmlb|wonu|x700|yas\-|your|zeto|zte\-/i.test(navigator.userAgent.substr(0, 4))) isMobile = true;


    if (typeof isNews != 'undefined' && isNews) {

        var full_url = window.location.href;


        if (isMobile) {


            // Cache the paragraphs for efficiency
            const paragraphs = $('.content-wrapper p');
            const n = paragraphs.length;

            // Define banners as an array of HTML strings
            const inNewsBanners = [
                '<div class="adunit-post" id="in-1"></div>',
                '<div class="adunit-post" id="in-2"></div>',
                '<div class="adunit-post" id="in-3"></div>',
                '<div class="adunit-post" id="in-4"></div>',
                '<div class="adunit-post" id="in-5"></div>'
            ];

            // Insert banners after every other paragraph starting from the first
            let k = 0;
            for (let i = 0; i < n && k < inNewsBanners.length; i += 1) {
                $(paragraphs[i]).after('<div class="mobile-only" style="text-align: center; height:auto; margin:0 auto 5px;">' + inNewsBanners[k] + '</div>');
                k++;
            }

            // Append remaining banners after content wrapper if any
            if (k < inNewsBanners.length) {
                let remainingBanners = '';
                for (let j = k; j < inNewsBanners.length; j++) {
                    remainingBanners += '<div class="mobile-only lasttt" style="text-align: center; height:auto; margin:0 auto 5px;">' + inNewsBanners[j] + '</div>';
                }
                $('.content-wrapper').after(remainingBanners);
            }


            try {
                postscribe('#in-1', `
                    <div id="gpt-passback1">
                      <script>
                        window.googletag = window.googletag || {cmd: []};
                        googletag.cmd.push(function() { 
                        googletag.defineSlot('/197741849/app_joq__15', [300, 100], 'gpt-passback1').addService(googletag.pubads());
                        googletag.enableServices();
                        googletag.display('gpt-passback1');
                        });
                      </script>
                    </div>`);
                postscribe('#in-2', `
                    <div id="gpt-passback2">
                      <script>
                        window.googletag = window.googletag || {cmd: []};
                        googletag.cmd.push(function() { 
                        googletag.defineSlot('/197741849/app_joq__16', [300, 100], 'gpt-passback2').addService(googletag.pubads());
                        googletag.enableServices();
                        googletag.display('gpt-passback2');
                        });
                      </script>
                    </div>`);
                postscribe('#in-3', `
                    <div id="gpt-passback3">
                      <script>
                        window.googletag = window.googletag || {cmd: []};
                        googletag.cmd.push(function() { 
                        googletag.defineSlot('/197741849/app_joq__10', [300, 100], 'gpt-passback3').addService(googletag.pubads());
                        googletag.enableServices();
                        googletag.display('gpt-passback3');
                        });
                      </script>
                    </div>`);
                postscribe('#in-4', `
                <div id="gpt-passback4">
                  <script>
                    window.googletag = window.googletag || {cmd: []};
                    googletag.cmd.push(function() {
                    googletag.defineSlot('/197741849/joq__MOB-300x100-second', [300, 100], 'gpt-passback4').addService(googletag.pubads());
                    googletag.enableServices();
                    googletag.display('gpt-passback4');
                    });
                  </script>
                </div>`);
                postscribe('#in-5', `
                <div id="gpt-passback5">
                  <script>
                    window.googletag = window.googletag || {cmd: []};
                    googletag.cmd.push(function() {
                    googletag.defineSlot('/197741849/app_joq__7', [300, 100], 'gpt-passback5').addService(googletag.pubads());
                    googletag.enableServices();
                    googletag.display('gpt-passback5');
                    });
                  </script>
                </div>`);
            } catch (e) {
                console.log(e);
            }


        	// Mobile mgid footer
            // try {
            //     postscribe('#mgid-footer-2', '<div id="M360256ScriptRootC1160456"></div><script src="https://jsc.mgid.com/j/o/joqalbania.com.1160456.js" async><\/script>');
            // } catch (e) {
            //     console.log(e);
            // }
                    

//             try {

//                 postscribe('#mob-fixed-footer', `<div id="M513484ScriptRootC1531607"></div>
// <script src="https://jsc.mgid.com/j/o/joq-albania.com.1531607.js" async></script>
// <!-- Composite End -->
// <amp-embed width="600" height="600" layout="responsive" type="mgid" data-publisher="joq-albania.com" data-widget="1531607" data-container="M513484ScriptRootC1531607" data-block-on-consent="_till_responded" > </amp-embed>`, {
//                      done: function () {
//                          $('#mob-fixed-footer').show();
//                      },
//                      error: function () {
                         
//                      }
//                  });

//             } catch (e) {}


//             try {

//                 postscribe('#after-news-mob', `<!-- Composite Start -->
// <div id="M513484ScriptRootC1531610"></div>
// <script src="https://jsc.mgid.com/j/o/joq-albania.com.1531610.js" async></script>
// <!-- Composite End -->
// <amp-embed width="600" height="600" layout="responsive" type="mgid" data-publisher="joq-albania.com" data-widget="1531610" data-container="M513484ScriptRootC1531610" data-block-on-consent="_till_responded" > </amp-embed>`, {
//                      done: function () {
                         
//                      },
//                      error: function () {
                         
//                      }
//                  });

//             } catch (e) {}




            
           



            $.post("https://dynamic2.joq-albania.com/country", function (data) {
                var rc_country = JSON.parse(data).country;

                if (rc_country != 'AL' && rc_country != '') {

                    // MGID footer close button
                    if (full_url.toLowerCase().indexOf('joqalbania') > -1) {
                        try {
                            postscribe('#footer-mob-banner', '<div id="M360256ScriptRootC1370319"></div><script src="https://jsc.mgid.com/j/o/joqalbania.com.1370319.js" async><\/script>');
                        } catch (e) {
                            console.log(e);
                        }
                    } else {
                        // try {
                        //     postscribe('#smart-mgid', '<div id="M360256ScriptRootC1307172"></div> <script src="https://jsc.mgid.com/j/o/joqalbania.com.1307172.js" async></script>');
                        // } catch (e) {
                        //     console.log(e);
                        // }
                    }


                    // MGID under article
                    try {
                        postscribe('#smart-mgid', '<div id="M360256ScriptRootC1307172"></div> <script src="https://jsc.mgid.com/j/o/joqalbania.com.1307172.js" async></script>');
                    } catch (e) {
                        console.log(e);
                    }

                    var full_url = window.location.href;
                    if (full_url.toLowerCase().indexOf("joqalbania.com") >= 0) {
                        // MGID under article
                        try {
                            postscribe('#mgid-under-article', '<div id="M360256ScriptRootC1370332"></div><script src="https://jsc.mgid.com/j/o/joqalbania.com.1370332.js" async><\/script>');
                        } catch (e) {
                            console.log(e);
                        }

                        
                    }

                    if (full_url.toLowerCase().indexOf("joq-albania.com") >= 0) {
                        // MGID under article
                        try {
                            postscribe('#mgid-under-article', '<div id="M513484ScriptRootC1429810"></div><script src="https://jsc.mgid.com/j/o/joq-albania.com.1429810.js" async><\/script>');
                        } catch (e) {
                            console.log(e);
                        }
                    }


                    // MOBILE MGID TOP
                    // try {
                    //     postscribe('#mgid-mob-top', '<script src="//ads.projectagoraservices.com/?id=6689" type="text/javascript"></script>');
                    // } catch (e) {
                    //     console.log(e);
                    // }


                    // MOBILE IMPULS
                    // try {
                    //     postscribe('#mob-impuls', '<script src="https://www.cdnimpuls.com/ads/ads.js"><\/script>');
                    // } catch (e) {
                    //     console.log(e);
                    // }


                    // MGID under article mob
                    // try {
                    //     postscribe('#photogallery_pos2', '<script src="//ads.projectagoraservices.com/?id=6689" type="text/javascript"></script>');
                    // } catch (e) {
                    //     console.log(e);
                    // }



                    // MGID above title mobile
                    try {

                        //second banner after gallery revcontent
                        // postscribe('#above_title_mobile', '<script src="//ads.projectagoraservices.com/?id=6688" type="text/javascript"></script>');


                    } catch (e) {

                        console.log(e);

                    }

                    // MGID TOP ARTICLE
                    try {
                        var full_url = window.location.href;
                        if (full_url.toLowerCase().indexOf('joq-albania') > -1) {
                            $(`#mgid-mob-top`).after(`<div class="mobile-only" style="text-align: center; height:auto; margin:0 auto 5px;"><div id="M513484ScriptRootC1311700"></div><script src="https://jsc.mgid.com/j/o/joq-albania.com.1311700.js" async></script></div>`);
                        } else {
                            $(`#mgid-mob-top`).after(`<div class="mobile-only" style="text-align: center; height:auto; margin:0 auto 5px;"><div id="M360256ScriptRootC1311699"></div><script src="https://jsc.mgid.com/j/o/joqalbania.com.1311699.js" async></script></div>`);
                        }

                    } catch (e) {
                        console.log(e);
                    }


                    // MGID MID ARTICLE
                    try {
                        var full_url = window.location.href;
                        if (full_url.toLowerCase().indexOf('joq-albania') > -1) {
                            $(`.content-wrapper p:nth-of-type(3)`).after(`<div class="mobile-only" style="text-align: center; height:auto; margin:0 auto 5px;"><div id="M513484ScriptRootC1311700"></div><script src="https://jsc.mgid.com/j/o/joq-albania.com.1311700.js" async></script></div>`);
                        } else {
                            $(`.content-wrapper p:nth-of-type(3)`).after(`<div class="mobile-only" style="text-align: center; height:auto; margin:0 auto 5px;"><div id="M360256ScriptRootC1311699"></div><script src="https://jsc.mgid.com/j/o/joqalbania.com.1311699.js" async></script></div>`);
                        }

                    } catch (e) {
                        console.log(e);
                    }


                    if (rc_country == 'XK' || rc_country == 'RS') {

                    	// Insta Kosovo
	                    if (isKosovo) {
	                       
	                        try {

	                            const breakLines = $('.content-wrapper p');

	                            if (breakLines.length > 2) {
	                                $('.content-wrapper').children(':eq(2)').after('<div id="insta-b" class="mobile_only" style="width: 300px; margin: -10px auto 0;"></div>');
	                                postscribe('#insta-b', '<a href="https://www.instagram.com/joq.kosovo/" target="_blank"><img src="https://joq-albania.com/b/insta/insta-kosovo.jpg"></a>');
	                            }

	                        } catch (e) {
	                            console.log(e);
	                        }
	                    }

                        try {
                            //Gjirafa -top page
                            postscribe('#rcjsload_b6282e', '<script id="gjanout-js" type="text/javascript">if (!window.ANConfig) window.ANConfig = { defaults: [], configs: [] };var gjid = Math.floor(Math.random() * 99999999);window.ANConfig.configs.push({gjan_gjid: gjid,gjan_confId: "2255-1",gjan_callBack: function () {},gjan_tg: "gjan_" + gjid});var elem = document.createElement("div"); elem.setAttribute("id", "gjan_" + gjid);var curS = document.getElementById("gjanout-js");curS.parentNode.insertBefore(elem, curS);curS.removeAttribute("id");(function () {if (!document.getElementById("gjan-js")) {var sc = document.createElement("script");sc.type = "text/javascript";sc.async = true;sc.setAttribute("id", "gjan-js");sc.src = "https://gjstatic.blob.core.windows.net/fix/gjanout-v2.js";var s = document.getElementsByTagName("script")[0];s.parentNode.insertBefore(sc, s);}})();<\/script>');

                        } catch (e) {
                            console.log(e);
                        }

                    }




                    if (rc_country == 'MK') {

                    	// Insta Macedonia
	                    if (isMacedonia) {
	                       
	                        try {

	                            const breakLines = $('.content-wrapper p');

	                            if (breakLines.length > 2) {
	                                $('.content-wrapper').children(':eq(2)').after('<div id="insta-b" class="mobile_only" style="width: 300px; margin: -10px auto 0;"></div>');
	                                postscribe('#insta-b', '<a href="https://www.instagram.com/joqmaqedonia/" target="_blank"><img src="https://joq-albania.com/b/insta/insta-macedonia.jpg"></a>');
	                            }

	                        } catch (e) {
	                            console.log(e);
	                        }
	                    }

                    }


                    const breakLines = $('.content-wrapper p');
                    const inNewsBanners = [
                        `<div id="M513484ScriptRootC1311700"></div><script src="https://jsc.mgid.com/j/o/joq-albania.com.1311700.js" async><\/script>`
                    ];
                    if (breakLines.length > inNewsBanners.length) {
                        for (let i = 0; i < inNewsBanners.length; i++) {
                            if (i === 2) {
                                $(`.content-wrapper p:nth-of-type(${i + 1})`).after(`<div class="mobile-only" style="text-align: center; height:auto; margin:0 auto 5px;">${inNewsBanners[i]}</div>`);
                            } else {
                                $(`.content-wrapper p:nth-of-type(${i + 1})`).after(`<div class="mobile-only" style="text-align: center; height:auto; margin:0 auto 5px;">${inNewsBanners[i]}</div>`);
                            }
                            
                        }
                    } else {
                        for (let i = 0; i < breakLines.length; i++) {
                            if (i === 2) {
                                $(`.content-wrapper p:nth-of-type(${i + 1})`).after(`<div class="mobile-only" style="text-align: center; height:auto; margin:0 auto 5px;">${inNewsBanners[i]}</div>`);
                            } else {
                                $(`.content-wrapper p:nth-of-type(${i + 1})`).after(`<div class="mobile-only" style="text-align: center; height:auto; margin:0 auto 5px;">${inNewsBanners[i]}</div>`);
                            }
                        }
                        let remainingBanners = '';
                        for (let i = 0; i < inNewsBanners.length - breakLines.length; i++) {
                            remainingBanners += `<div class="mobile-only lasttt" style="text-align: center; height:auto; margin:0 auto 5px;">${inNewsBanners[inNewsBanners.length - 1 - i]}</div>`;
                        }
                        $(`.content-wrapper`).after(remainingBanners);
                    }

                    


                } else { // ALBANIA

                    // $("#ytb-mob").after(`<a style="display: flex; justify-content: center;" href="https://www.instagram.com/cinco_cavalli_premium_club/?igshid=YmMyMTA2M2Y%3D" target="_blank"><img style="width: 300px;" src="/b/cinco/31/28-09-2022.gif"></a>`);



                    //MGID under article mob joqalbania.com
                    var full_url = window.location.href;
                    if (full_url.toLowerCase().indexOf("joq-albania.com") >= 0) {

                        if (hasPhotoGallery) {

                            // MGID solo
                            // try {
                            //     postscribe('#rcjsload_c1f2ce', '<script src="//ads.projectagoraservices.com/?id=6686" type="text/javascript"></script>');
                            // } catch (e) {
                            //     console.log(e);
                            // }

                        }

                    }

                    var full_url = window.location.href;


                    // Insta Albania
                    if (isSport) {
                        try {
                            if (breakLines.length > 2) {
                                $('.content-wrapper').children(':eq(2)').after('<div id="insta-b" class="mobile_only" style="width: 300px; margin: -10px auto 0;"></div>');
                                postscribe('#insta-b', '<a href="https://www.instagram.com/joq.sport/" target="_blank"><img src="https://joq-albania.com/b/insta/insta-sport.gif"></a>');
                            }
                        } catch (e) {
                            console.log(e);
                        }
                    }

                }

            });


            // PC
        } else {





              

            //MGID right pc joq.al
            var full_url = window.location.href;



            //MGID right pc joqalbania.com
            // if (full_url.toLowerCase().indexOf("joq-albania.com") >= 0) {
            //     try {
            //         postscribe('#mgid-right-pc', '<script src="//ads.projectagoraservices.com/?id=6685" type="text/javascript"></script>');
            //     } catch (e) {
            //         console.log(e);
            //     }
            // }

            
            // try {
            //     //second banner after gallery revcontent
            //     postscribe('#pc-under-news', '<script src="//ads.projectagoraservices.com/?id=6689" type="text/javascript"></script>');

            // } catch(e) {
            //     console.log(e);
            // }


            $.post("https://dynamic2.joq-albania.com/country", function (data) {
                var rc_country = JSON.parse(data).country;


                if (rc_country != 'AL' && rc_country != '') {


                    var full_url = window.location.href;
                    if (full_url.toLowerCase().indexOf("joqalbania.com") >= 0) {
                        // MGID under article
                        try {
                            postscribe('#mgid-under-article', '<div id="M360256ScriptRootC1370332"></div><script src="https://jsc.mgid.com/j/o/joqalbania.com.1370332.js" async><\/script>');
                        } catch (e) {
                            console.log(e);
                        }

                        
                    }

                    if (full_url.toLowerCase().indexOf("joq-albania.com") >= 0) {
                        // MGID under article
                        try {
                            postscribe('#mgid-under-article', '<div id="M513484ScriptRootC1429810"></div><script src="https://jsc.mgid.com/j/o/joq-albania.com.1429810.js" async><\/script>');
                        } catch (e) {
                            console.log(e);
                        }
                    }
                    

                    // MGID under article
                    try {
                        postscribe('#smart-mgid', '<div id="M360256ScriptRootC1307172"></div> <script src="https://jsc.mgid.com/j/o/joqalbania.com.1307172.js" async></script>');
                    } catch (e) {
                        console.log(e);
                    }

                    // PC IMPULS
                    // try {
                    //     postscribe('#pc-impuls', '<script src="https://www.cdnimpuls.com/ads/ads.js"><\/script>');
                    // } catch (e) {}

                    //postscribe('#floating-left', '<div class="adunit-2" data-adunit="adxp_jetaoshqef_160x600" data-dimensions="160x600" style="width:160px; height:600px;"></div>');

                } else {



                    // $("#ytb-pc").after(`<a style="display: flex; justify-content: center;" href="https://www.instagram.com/cinco_cavalli_premium_club/?igshid=YmMyMTA2M2Y%3D" target="_blank"><img src="/b/cinco/325/28-09-2022.gif"></a>`);





                    // Vodafone PC Albania
                    try {
                        // postscribe('#vod-pc', '');

                    } catch (e) {
                        console.log(e);
                    }

                }

            });

        }
    }


    if (isMobile) {
       $(".mobile-only .adunit-1").dfp({
            dfpID: '197741849',
            collapseEmptyDivs: true
        });
   } else {
        $(".pc-only .adunit-1").dfp({
            dfpID: '197741849',
            collapseEmptyDivs: true
        }); 
   }
    



    


    $('#close-footer-mob-banner').click(function(){
      $('#footer-mob-banner').remove();
    });






    $.get( "/myAjax/sondazh-popup.html", function( data ) {
        $( "body" ).append( data );
    });



});
