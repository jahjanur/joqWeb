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
    xhr.onreadystatechange = function() {
        if (xhr.readyState === 4) {
            if (xhr.responseText) {
                
            }
        }
    }


}



$(document).ready(function () {


    var hasPhotoGallery = (typeof allPhotos !== 'undefined');


    var isMobile = false;
    if (/(android|bb\d+|meego).+mobile|avantgo|bada\/|blackberry|blazer|compal|elaine|fennec|hiptop|iemobile|ip(hone|od)|ipad|iris|kindle|Android|Silk|lge |maemo|midp|mmp|netfront|opera m(ob|in)i|palm( os)?|phone|p(ixi|re)\/|plucker|pocket|psp|series(4|6)0|symbian|treo|up\.(browser|link)|vodafone|wap|windows (ce|phone)|xda|xiino/i.test(navigator.userAgent) ||
        /1207|6310|6590|3gso|4thp|50[1-6]i|770s|802s|a wa|abac|ac(er|oo|s\-)|ai(ko|rn)|al(av|ca|co)|amoi|an(ex|ny|yw)|aptu|ar(ch|go)|as(te|us)|attw|au(di|\-m|r |s )|avan|be(ck|ll|nq)|bi(lb|rd)|bl(ac|az)|br(e|v)w|bumb|bw\-(n|u)|c55\/|capi|ccwa|cdm\-|cell|chtm|cldc|cmd\-|co(mp|nd)|craw|da(it|ll|ng)|dbte|dc\-s|devi|dica|dmob|do(c|p)o|ds(12|\-d)|el(49|ai)|em(l2|ul)|er(ic|k0)|esl8|ez([4-7]0|os|wa|ze)|fetc|fly(\-|_)|g1 u|g560|gene|gf\-5|g\-mo|go(\.w|od)|gr(ad|un)|haie|hcit|hd\-(m|p|t)|hei\-|hi(pt|ta)|hp( i|ip)|hs\-c|ht(c(\-| |_|a|g|p|s|t)|tp)|hu(aw|tc)|i\-(20|go|ma)|i230|iac( |\-|\/)|ibro|idea|ig01|ikom|im1k|inno|ipaq|iris|ja(t|v)a|jbro|jemu|jigs|kddi|keji|kgt( |\/)|klon|kpt |kwc\-|kyo(c|k)|le(no|xi)|lg( g|\/(k|l|u)|50|54|\-[a-w])|libw|lynx|m1\-w|m3ga|m50\/|ma(te|ui|xo)|mc(01|21|ca)|m\-cr|me(rc|ri)|mi(o8|oa|ts)|mmef|mo(01|02|bi|de|do|t(\-| |o|v)|zz)|mt(50|p1|v )|mwbp|mywa|n10[0-2]|n20[2-3]|n30(0|2)|n50(0|2|5)|n7(0(0|1)|10)|ne((c|m)\-|on|tf|wf|wg|wt)|nok(6|i)|nzph|o2im|op(ti|wv)|oran|owg1|p800|pan(a|d|t)|pdxg|pg(13|\-([1-8]|c))|phil|pire|pl(ay|uc)|pn\-2|po(ck|rt|se)|prox|psio|pt\-g|qa\-a|qc(07|12|21|32|60|\-[2-7]|i\-)|qtek|r380|r600|raks|rim9|ro(ve|zo)|s55\/|sa(ge|ma|mm|ms|ny|va)|sc(01|h\-|oo|p\-)|sdk\/|se(c(\-|0|1)|47|mc|nd|ri)|sgh\-|shar|sie(\-|m)|sk\-0|sl(45|id)|sm(al|ar|b3|it|t5)|so(ft|ny)|sp(01|h\-|v\-|v )|sy(01|mb)|t2(18|50)|t6(00|10|18)|ta(gt|lk)|tcl\-|tdg\-|tel(i|m)|tim\-|t\-mo|to(pl|sh)|ts(70|m\-|m3|m5)|tx\-9|up(\.b|g1|si)|utst|v400|v750|veri|vi(rg|te)|vk(40|5[0-3]|\-v)|vm40|voda|vulc|vx(52|53|60|61|70|80|81|83|85|98)|w3c(\-| )|webc|whit|wi(g |nc|nw)|wmlb|wonu|x700|yas\-|your|zeto|zte\-/i.test(navigator.userAgent.substr(0, 4))) isMobile = true;


    if(typeof isNews != 'undefined' && isNews) {

        if ($('#j-poll').length) {
            postscribe('#j-poll', '<link rel="stylesheet" href="https://static.joq-albania.com/assets/css/joq-poll.css" type="text/css"/><script src="https://www.google.com/recaptcha/api.js?render=6LfVhcgUAAAAAJYIeY9PTaOd2nLrAqyArP-5_DUN"><\/script><div class="joq-poll-wrapper"> <div class="joq-poll-title"> PERSONAZHI I VITIT 2019 <div> KLIKO PËR TË VOTUAR</div> <div style="text-align: center;height: 13px;"><i class="fa fa-angle-down"></i></div> </div> <div class="joq-poll-body"> <ul> <li> <div class="joq-poll-item-wrapper"> <div class="joq-poll-item-image"><img src="https://static.joq-albania.com/imagesNew/2019/12/n-licaj.jpg"> </div> <div class="joq-poll-item-title"> Neritan Licaj</div> <div class="joq-poll-item-description"> Aktori i mirënjohur shqiptar, aktivist dhe mbrojtës i shoqërisë, i njohur për zërin kritik ndaj qeverisë. </div> <div class="joq-poll-item-action"> <button data-id="12" class="joq-poll-item-button">Voto</button> <span data-id="12" class="joq-poll-item-result"></span></div> </div> <div class="joq-poll-item-wrapper"> <div class="joq-poll-item-image"><img src="https://static.joq-albania.com/imagesNew/2019/12/e-naci.jpg"></div> <div class="joq-poll-item-title"> Elvis Naçi</div> <div class="joq-poll-item-description"> Drejtuesi i Fondacionit "Firdeus", i njohur si mirëbërësi i shqiptarëve të varfër me punën e tij të palodhshme. </div> <div class="joq-poll-item-action"> <button data-id="1" class="joq-poll-item-button">Voto</button> <span data-id="1" class="joq-poll-item-result"></span></div> </div> <div class="joq-poll-item-wrapper"> <div class="joq-poll-item-image"><img src="https://static.joq-albania.com/imagesNew/2019/12/m-mema.jpg"></div> <div class="joq-poll-item-title"> Marin Mema</div> <div class="joq-poll-item-description"> Gazetari patriot i cili ka rifreskuar kujtesën e shqiptarëve dhe bashkë me Marko Kepin mblodhi shumë fonde për pasojat e tërmetit. </div> <div class="joq-poll-item-action"> <button data-id="2" class="joq-poll-item-button">Voto</button> <span data-id="2" class="joq-poll-item-result"></span></div> </div> <div class="joq-poll-item-wrapper"> <div class="joq-poll-item-image"><img src="https://static.joq-albania.com/imagesNew/2019/12/alvin.jpg"></div> <div class="joq-poll-item-title"> Taulant Kopliku</div> <div class="joq-poll-item-description"> Gazetari investigativ i emisionit Le Iene, falë përpjekjeve të të cilit u bë i njohur për italianët dhe jo vetëm, rasti i 11-vjeçarit shqiptar Alvin Berisha i burgosur në kampin sirian. </div> <div class="joq-poll-item-action"> <button data-id="4" class="joq-poll-item-button">Voto</button> <span data-id="4" class="joq-poll-item-result"></span></div> </div> </li> <li> <div class="joq-poll-item-wrapper"> <div class="joq-poll-item-image"><img src="https://static.joq-albania.com/imagesNew/2019/12/e-rama.jpg"></div> <div class="joq-poll-item-title"> Edi Rama</div> <div class="joq-poll-item-description"> Kryeministri unik i cili duhet marrë shembull nga liderët e Bashkimit Europian. </div> <div class="joq-poll-item-action"> <button data-id="5" class="joq-poll-item-button">Voto</button> <span data-id="5" class="joq-poll-item-result"></span></div> </div> <div class="joq-poll-item-wrapper"> <div class="joq-poll-item-image"><img src="https://static.joq-albania.com/imagesNew/2019/12/i-bozo.jpg"></div> <div class="joq-poll-item-title"> Luljeta Bozo</div> <div class="joq-poll-item-description"> Inxhinierja e mirënjohur shqiptare, profesoreshë në fushën e saj. </div> <div class="joq-poll-item-action"> <button data-id="6" class="joq-poll-item-button">Voto</button> <span data-id="6" class="joq-poll-item-result"></span></div> </div> <div class="joq-poll-item-wrapper"> <div class="joq-poll-item-image"><img src="https://static.joq-albania.com/imagesNew/2019/12/i-kastrati.jpg"> </div> <div class="joq-poll-item-title"> Lutfi Kastrati</div> <div class="joq-poll-item-description"> Protestuesi simbol i qëndresës historike 1-vjeçare me banorët e Astirit </div> <div class="joq-poll-item-action"> <button data-id="7" class="joq-poll-item-button">Voto</button> <span data-id="7" class="joq-poll-item-result"></span></div> </div> <div class="joq-poll-item-wrapper"> <div class="joq-poll-item-image"><img src="https://static.joq-albania.com/imagesNew/2019/12/a-kokalari.jpg"> </div> <div class="joq-poll-item-title"> Arba Kokalari</div> <div class="joq-poll-item-description"> Mbesa e Musine Kokalarit, deputetja e parë shqiptare pjesë e Parlamentit Evropian. </div> <div class="joq-poll-item-action"> <button data-id="8" class="joq-poll-item-button">Voto</button> <span data-id="8" class="joq-poll-item-result"></span></div> </div> <div class="joq-poll-item-wrapper"> <div class="joq-poll-item-image"><img src="https://static.joq-albania.com/imagesNew/2019/12/d-nelaj.jpg"> </div> <div class="joq-poll-item-title"> Dilaver Nelaj</div> <div class="joq-poll-item-description"> Shqiptari me numrin më të lartë të protestave individuale në vend. </div> <div class="joq-poll-item-action"> <button data-id="9" class="joq-poll-item-button">Voto</button> <span data-id="9" class="joq-poll-item-result"></span></div> </div> </li> <li> <div class="joq-poll-item-wrapper"> <div class="joq-poll-item-image"><img src="https://static.joq-albania.com/imagesNew/2019/12/a-hajdari.jpg"> </div> <div class="joq-poll-item-title"> Arbër Hajdari</div> <div class="joq-poll-item-description"> Drejtuesi i respektueshëm i Fondacionit "Fundjavë Ndryshe", megjithëse më i ri se të tjerët, ka mbledhur shumë fonde për të prekurit nga tërmeti. </div> <div class="joq-poll-item-action"> <button data-id="10" class="joq-poll-item-button">Voto</button> <span data-id="10" class="joq-poll-item-result"></span></div> </div> <div class="joq-poll-item-wrapper"> <div class="joq-poll-item-image"><img src="https://static.joq-albania.com/imagesNew/2019/12/b-rexha.jpg"> </div> <div class="joq-poll-item-title"> Bebe Rexha</div> <div class="joq-poll-item-description"> Këngëtarja me origjinë shqiptare e njohur botërisht, e cila dhuroi 100 mijë euro për të prekurit nga tërmeti dhe shumë dashuri duke i takuar ata nga afër. </div> <div class="joq-poll-item-action"> <button data-id="11" class="joq-poll-item-button">Voto</button> <span data-id="11" class="joq-poll-item-result"></span></div> </div> <div class="joq-poll-item-wrapper"> <div class="joq-poll-item-image"><img src="https://static.joq-albania.com/imagesNew/2019/12/sadak-1.jpg"> </div> <div class="joq-poll-item-title"> Sadak, qeni i Policisë së Kosovës</div> <div class="joq-poll-item-description"> Heroi katërputrosh i cili me aftësitë e tij shpëtoi nga rrënojat e banesave disa shqiptarë. </div> <div class="joq-poll-item-action"> <button data-id="3" class="joq-poll-item-button">Voto</button> <span data-id="3" class="joq-poll-item-result"></span></div> </div> <div class="joq-poll-item-wrapper"> <div class="joq-poll-item-image"><img src="https://static.joq-albania.com/imagesNew/2019/12/h-kastrati.jpg"> </div> <div class="joq-poll-item-title"> Halil Kastrati</div> <div class="joq-poll-item-description"> Imami i njohur nga Kosova, një prej figurave më të lartësuara për kontribute të mëdha tek të varfërit. </div> <div class="joq-poll-item-action"> <button data-id="13" class="joq-poll-item-button">Voto</button> <span data-id="13" class="joq-poll-item-result"></span></div> </div> </li> </ul> </div></div><script src="https://static.joq-albania.com/assets/js/joq-poll.js" type="text/javascript"><\/script>');
        }

        if (isMobile) {


            // Telekom
            try{

               var breakLines = $('.itemIntroText p');
                if (breakLines.length > 2) {


                    $('.itemIntroText').children(':eq(1)').after('<div id="telekom_inside_news" class="mobile_only" style="margin: -10px auto 10px;"></div>');
                    postscribe('#telekom_inside_news', '<div class="mobile_only" style="width:300px; height:auto; margin:0 auto 0;"><div class="adunit-1" data-adunit="joq__300x100-first" data-dimensions="300x100" style="width:300px; height:auto;"></div></div>');

                    //$('.itemIntroText').children(':eq(3)').after('<div id="albsig_inside_news" class="mobile_only" style="margin: -10px auto 10px;"></div>');
                    //postscribe('#albsig_inside_news', '<div class="mobile_only" style="width:300px; height:auto; margin:0 auto 5px;"><div class="adunit-1" data-adunit="joq__MOB300x100-3" data-dimensions="300x100"></div></div>');

                    $('.itemIntroText').children(':eq(5)').after('<div id="tirbank_inside_news" class="mobile_only" style="margin: -10px auto 10px;"></div>');
                    postscribe('#tirbank_inside_news', '');

                    

                    // postscribe('#mgid_inside_news', '<script src="https://www.cdnimpuls.com/ads/ads.js"></script>');

                } 

            } catch(e) {

                console.log(e);

            }


            var full_url = window.location.href;
            //MGID under article mob joq.al
            if (full_url.toLowerCase().indexOf("joq.al") >= 0) {

                try {

                    postscribe('#rcjsload_c1f2ce', '<div id="M357419ScriptRootC386063"><div id="M357419PreloadC386063">Loading...    </div><script>(function(){var D=new Date(),d=document,b="body",ce="createElement",ac="appendChild",st="style",ds="display",n="none",gi="getElementById",lp=d.location.protocol,wp=lp.indexOf("http")==0?lp:"https:";var i=d[ce]("iframe");i[st][ds]=n;d[gi]("M357419ScriptRootC386063")[ac](i);try{var iw=i.contentWindow.document;iw.open();iw.writeln("<ht"+"ml><bo"+"dy></bo"+"dy></ht"+"ml>");iw.close();var c=iw[b];}catch(e){var iw=d;var c=d[gi]("M357419ScriptRootC386063");}var dv=iw[ce]("div");dv.id="MG_ID";dv[st][ds]=n;dv.innerHTML=386063;c[ac](dv);var s=iw[ce]("script");s.async="async";s.defer="defer";s.charset="utf-8";s.src=wp+"//jsc.mgid.com/j/o/joq.al.386063.js?t="+D.getYear()+D.getMonth()+D.getUTCDate()+D.getUTCHours();c[ac](s);})();<\/script></div>');

                } catch(e) {

                    console.log(e);

                }

                
            }



            //MGID after photogalery
            //postscribe('#photogallery_pos3', '<div id="M228416ScriptRootC222821"><div id="M228416PreloadC222821">Loading...    </div><script>(function(){var D=new Date(),d=document,b="body",ce="createElement",ac="appendChild",st="style",ds="display",n="none",gi="getElementById";var i=d[ce]("iframe");i[st][ds]=n;d[gi]("M228416ScriptRootC222821")[ac](i);try{var iw=i.contentWindow.document;iw.open();iw.writeln("<ht"+"ml><bo"+"dy></bo"+"dy></ht"+"ml>");iw.close();var c=iw[b];}catch(e){var iw=d;var c=d[gi]("M228416ScriptRootC222821");}var dv=iw[ce]("div");dv.id="MG_ID";dv[st][ds]=n;dv.innerHTML=222821;c[ac](dv);var s=iw[ce]("script");s.async="async";s.defer="defer";s.charset="utf-8";s.src="//jsc.mgid.com/j/o/joq.al.222821.js?t="+D.getYear()+D.getMonth()+D.getUTCDate()+D.getUTCHours();c[ac](s);})();<\/script></div>');
           

            // Taboola jashte Shqiperise
            try{

               var breakLines = $('.itemIntroText p');
                //var pNumber = Number(Math.round(breakLines.length/2));
                if (breakLines.length > 2) {
                    /*$('.itemIntroText').children(':eq(2)').after('<div id="revContent-1" class="mobile_only" style="width: 300px; margin: -10px auto 0;"></div>');
                    postscribe('#revContent-1', '<script>var RevContentSolo = { button_text: "Lexo më shumë", widget_id: 74786};<\/script><script type="text/javascript" id="revsoloserve" src="https://labs-cdn.revcontent.com/build/revsoloserve.min.js"><\/script>');*/

                    

                    //$('.itemIntroText').children(':eq(4)').after('<div id="MGID-1" class="mobile_only" style="width: 300px; margin: -10px auto 0;"></div>');
                    //postscribe('#MGID-1', '<div id="M357419ScriptRootC267983"><div id="M357419PreloadC267983">Loading...    </div><script>(function(){var D=new Date(),d=document,b="body",ce="createElement",ac="appendChild",st="style",ds="display",n="none",gi="getElementById",lp=d.location.protocol,wp=lp.indexOf("http")==0?lp:"https:";var i=d[ce]("iframe");i[st][ds]=n;d[gi]("M357419ScriptRootC267983")[ac](i);try{var iw=i.contentWindow.document;iw.open();iw.writeln("<ht"+"ml><bo"+"dy></bo"+"dy></ht"+"ml>");iw.close();var c=iw[b];}catch(e){var iw=d;var c=d[gi]("M357419ScriptRootC267983");}var dv=iw[ce]("div");dv.id="MG_ID";dv[st][ds]=n;dv.innerHTML=267983;c[ac](dv);var s=iw[ce]("script");s.async="async";s.defer="defer";s.charset="utf-8";s.src=wp+"//jsc.mgid.com/j/o/joq.al.267983.js?t="+D.getYear()+D.getMonth()+D.getUTCDate()+D.getUTCHours();c[ac](s);})();</script></div>');

                } 

            } catch(e) {

                console.log(e);

            }

            $.post("https://dynamic-php.abingmedia.com/country2.php", function (data) {
                var rc_country = JSON.parse(data).country;
                
                if (rc_country != 'AL' && rc_country != '') {


                    // MOBILE IMPULS
                    try {
                        postscribe('#mob-impuls', '<script src="https://www.cdnimpuls.com/ads/ads.js"><\/script>');
                    } catch(e) {
                        console.log(e);
                    }


                    //MGID under article mob joqalbania.com
                    var full_url = window.location.href;
                    if (full_url.toLowerCase().indexOf("joq-albania.com") >= 0) {

                        try {
                            postscribe('#rcjsload_c1f2ce', '<div id="M360256ScriptRootC386065"><div id="M360256PreloadC386065">Loading...</div><script>(function(){var D=new Date(),d=document,b="body",ce="createElement",ac="appendChild",st="style",ds="display",n="none",gi="getElementById",lp=d.location.protocol,wp=lp.indexOf("http")==0?lp:"https:";var i=d[ce]("iframe");i[st][ds]=n;d[gi]("M360256ScriptRootC386065")[ac](i);try{var iw=i.contentWindow.document;iw.open();iw.writeln("<ht"+"ml><bo"+"dy></bo"+"dy></ht"+"ml>");iw.close();var c=iw[b];}catch(e){var iw=d;var c=d[gi]("M360256ScriptRootC386065");}var dv=iw[ce]("div");dv.id="MG_ID";dv[st][ds]=n;dv.innerHTML=386065;c[ac](dv);var s=iw[ce]("script");s.async="async";s.defer="defer";s.charset="utf-8";s.src=wp+"//jsc.mgid.com/j/o/joqalbania.com.386065.js?t="+D.getYear()+D.getMonth()+D.getUTCDate()+D.getUTCHours();c[ac](s);})();<\/script></div>');

                            $('#rcjsload_c1f2ce').css('margin-top', '-25px');

                        } catch(e) {

                            console.log(e);

                        }

                        
                    }



                    // MGID above title mobile
                    try {
            
                        //second banner after gallery revcontent
                        postscribe('#above_title_mobile', '<div id="M360256ScriptRootC356643"><div id="M360256PreloadC356643">Loading...    </div><script>(function(){var D=new Date(),d=document,b="body",ce="createElement",ac="appendChild",st="style",ds="display",n="none",gi="getElementById",lp=d.location.protocol,wp=lp.indexOf("http")==0?lp:"https:";var i=d[ce]("iframe");i[st][ds]=n;d[gi]("M360256ScriptRootC356643")[ac](i);try{var iw=i.contentWindow.document;iw.open();iw.writeln("<ht"+"ml><bo"+"dy></bo"+"dy></ht"+"ml>");iw.close();var c=iw[b];}catch(e){var iw=d;var c=d[gi]("M360256ScriptRootC356643");}var dv=iw[ce]("div");dv.id="MG_ID";dv[st][ds]=n;dv.innerHTML=356643;c[ac](dv);var s=iw[ce]("script");s.async="async";s.defer="defer";s.charset="utf-8";s.src=wp+"//jsc.mgid.com/j/o/joqalbania.com.356643.js?t="+D.getYear()+D.getMonth()+D.getUTCDate()+D.getUTCHours();c[ac](s);})();<\/script></div>');


                    } catch(e) {

                        console.log(e);

                    }


                    try {
            
                        var the_rev_id2 = 'rcjsload_1d4583';
                        var the_rev_w2 = '111441';

                        //second banner after gallery revcontent
                        /*postscribe('#photogallery_pos2', '<div id="'+the_rev_id2+'"></div><script type="text/javascript">(function() {var referer="";try{if(referer=document.referrer,"undefined"==typeof referer||""==referer)throw"undefined"}catch(exception){referer=document.location.href,(""==referer||"undefined"==typeof referer)&&(referer=document.URL)}referer=referer.substr(0,700);var rcds = document.getElementById("'+the_rev_id2+'");var rcel = document.createElement("script");rcel.id = "rc_" + Math.floor(Math.random() * 1000);rcel.type = "text/javascript";rcel.src = "https://trends.revcontent.com/serve.js.php?w='+the_rev_w2+'&t="+rcel.id+"&c="+(new Date()).getTime()+"&width="+(window.outerWidth || document.documentElement.clientWidth)+"&referer="+referer;rcel.async = true;rcds.appendChild(rcel);})();<\/script>');*/


                    } catch(e) {

                        console.log(e);

                    }


                    

                    var the_rev_id = 'rcjsload_f4d1b4';
                    var the_rev_w = '100616';
                    
                    
                    //Fixed footer Revcontent
                    postscribe('#remove-fcb', '<div id="'+the_rev_id+'"></div><script type="text/javascript">(function() {var referer="";try{if(referer=document.referrer,"undefined"==typeof referer||""==referer)throw"undefined"}catch(exception){referer=document.location.href,(""==referer||"undefined"==typeof referer)&&(referer=document.URL)}referer=referer.substr(0,700);var rcds = document.getElementById("'+the_rev_id+'");var rcel = document.createElement("script");rcel.id = "rc_" + Math.floor(Math.random() * 1000);rcel.type = "text/javascript";rcel.src = "https://trends.revcontent.com/serve.js.php?w='+the_rev_w+'&t="+rcel.id+"&c="+(new Date()).getTime()+"&width="+(window.outerWidth || document.documentElement.clientWidth)+"&referer="+referer;rcel.async = true;rcds.appendChild(rcel);})();<\/script>');


                    //Buttoni "X"
                    //appendRevcontent_v1('rcjsload_62467f', 81580);



                    // Taboola jashte Shqiperise
                    try{
        
                       var breakLines = $('.itemIntroText p');
                        //var pNumber = Number(Math.round(breakLines.length/2));
                        if (breakLines.length > 2) {
                            /*$('.itemIntroText').children(':eq(2)').after('<div id="revContent-1" class="mobile_only" style="width: 300px; margin: -10px auto 0;"></div>');
                            postscribe('#revContent-1', '<script>var RevContentSolo = { button_text: "Lexo më shumë", widget_id: 74786};<\/script><script type="text/javascript" id="revsoloserve" src="https://labs-cdn.revcontent.com/build/revsoloserve.min.js"><\/script>');*/

                            //$('.itemIntroText').children(':eq(2)').after('<div id="MGID-1" class="mobile_only" style="width: 300px; margin: -10px auto 0;"></div>');
                            //postscribe('#MGID-1', '<div id="M228416ScriptRootC222822"><div id="M228416PreloadC222822">Loading...    </div><script>(function(){var D=new Date(),d=document,b="body",ce="createElement",ac="appendChild",st="style",ds="display",n="none",gi="getElementById";var i=d[ce]("iframe");i[st][ds]=n;d[gi]("M228416ScriptRootC222822")[ac](i);try{var iw=i.contentWindow.document;iw.open();iw.writeln("<ht"+"ml><bo"+"dy></bo"+"dy></ht"+"ml>");iw.close();var c=iw[b];}catch(e){var iw=d;var c=d[gi]("M228416ScriptRootC222822");}var dv=iw[ce]("div");dv.id="MG_ID";dv[st][ds]=n;dv.innerHTML=222822;c[ac](dv);var s=iw[ce]("script");s.async="async";s.defer="defer";s.charset="utf-8";s.src="//jsc.mgid.com/j/o/joq.al.222822.js?t="+D.getYear()+D.getMonth()+D.getUTCDate()+D.getUTCHours();c[ac](s);})();<\/script></div>');

                            // $('.itemIntroText').children(':eq(2)').after('<div id="TABOOLA-1" class="mobile_only"></div>');
                            postscribe('#TABOOLA-1', '<div id="taboola-mobile-mid-article-thumbnails"></div><script type="text/javascript">window._taboola = window._taboola || [];_taboola.push({mode: "thumbnails-c",container: "taboola-mobile-mid-article-thumbnails",placement: "Mobile Mid Article Thumbnails",target_type: "mix"});<\/script>');

                        } 

                    } catch(e) {

                        console.log(e);

                    }



                    if(rc_country == 'XK' || rc_country == 'RS') {

                        try{
                            //Gjirafa -top page
                            postscribe('#rcjsload_b6282e', '<script id="gjanout-js" type="text/javascript">if (!window.ANConfig) window.ANConfig = { defaults: [], configs: [] };var gjid = Math.floor(Math.random() * 99999999);window.ANConfig.configs.push({gjan_gjid: gjid,gjan_confId: "2255-1",gjan_callBack: function () {},gjan_tg: "gjan_" + gjid});var elem = document.createElement("div"); elem.setAttribute("id", "gjan_" + gjid);var curS = document.getElementById("gjanout-js");curS.parentNode.insertBefore(elem, curS);curS.removeAttribute("id");(function () {if (!document.getElementById("gjan-js")) {var sc = document.createElement("script");sc.type = "text/javascript";sc.async = true;sc.setAttribute("id", "gjan-js");sc.src = "https://gjstatic.blob.core.windows.net/fix/gjanout-v2.js";var s = document.getElementsByTagName("script")[0];s.parentNode.insertBefore(sc, s);}})();<\/script>');

                        } catch(e) {
                            console.log(e);
                        }

                    } else {

                        try{
                            //MGID -top page
                            //postscribe('#rcjsload_b6282e', '<div id="M228416ScriptRootC180389"><div id="M228416PreloadC180389">Loading...</div><script>(function(){var D=new Date(),d=document,b="body",ce="createElement",ac="appendChild",st="style",ds="display",n="none",gi="getElementById";var i=d[ce]("iframe");i[st][ds]=n;d[gi]("M228416ScriptRootC180389")[ac](i);try{var iw=i.contentWindow.document;iw.open();iw.writeln("<ht"+"ml><bo"+"dy></bo"+"dy></ht"+"ml>");iw.close();var c=iw[b];}catch(e){var iw=d;var c=d[gi]("M228416ScriptRootC180389");}var dv=iw[ce]("div");dv.id="MG_ID";dv[st][ds]=n;dv.innerHTML=180389;c[ac](dv);var s=iw[ce]("script");s.async="async";s.defer="defer";s.charset="utf-8";s.src="//jsc.mgid.com/j/o/joq.al.180389.js?t="+D.getYear()+D.getMonth()+D.getDate()+D.getHours();c[ac](s);})();<\/script></div>');

                            //postscribe('#rcjsload_b6282e', '<div id="M228416ScriptRootC223399"><div id="M228416PreloadC223399">Loading...    </div><script>(function(){var D=new Date(),d=document,b="body",ce="createElement",ac="appendChild",st="style",ds="display",n="none",gi="getElementById";var i=d[ce]("iframe");i[st][ds]=n;d[gi]("M228416ScriptRootC223399")[ac](i);try{var iw=i.contentWindow.document;iw.open();iw.writeln("<ht"+"ml><bo"+"dy></bo"+"dy></ht"+"ml>");iw.close();var c=iw[b];}catch(e){var iw=d;var c=d[gi]("M228416ScriptRootC223399");}var dv=iw[ce]("div");dv.id="MG_ID";dv[st][ds]=n;dv.innerHTML=223399;c[ac](dv);var s=iw[ce]("script");s.async="async";s.defer="defer";s.charset="utf-8";s.src="//jsc.mgid.com/j/o/joq.al.223399.js?t="+D.getYear()+D.getMonth()+D.getUTCDate()+D.getUTCHours();c[ac](s);})();<\/script></div>');
                            
                        } catch(e) {
                            console.log(e);
                        }

                    }
                    
                    
                    try{
                    
                        postscribe('#taboola-top-mobile', '<div id="taboola-above-article-thumbnails"></div><script type="text/javascript">window._taboola = window._taboola || [];_taboola.push({mode: "thumbnails-d",container: "taboola-above-article-thumbnails",placement: "Above Article Thumbnails",target_type: "mix"});<\/script>');

                    } catch(e) {
                        console.log(e);
                    }

                    
                } else { // ALBANIA
                    //$("#remove-fcb").remove();


                    //MGID AND Boost under article mob joqalbania.com
                    var full_url = window.location.href;
                    if (full_url.toLowerCase().indexOf("joqalbania.com") >= 0) {

                        try {
                            postscribe('#photogallery_pos2', '<div id="boost-30"><script> var w_=30,n_=14,bs=document.createElement("script");bs.id="b-" + Math.floor(Math.random() * 1000);bs.type="text/javascript";bs.src="https://static.boostcdn.net/js/b_infinite.js";bs.async=true;document.getElementById("boost-30").appendChild(bs);<\/script></div>');
                        } catch(e) {
                            console.log(e);
                        }
                        
                    } else if (full_url.toLowerCase().indexOf("joq-albania.com") >= 0) {

                    	if (hasPhotoGallery) {

                            // MGID solo
                            try {
                                postscribe('#rcjsload_c1f2ce', '<div id="M360256ScriptRootC308660"><div id="M360256PreloadC308660">Loading...    </div><script>(function(){var D=new Date(),d=document,b="body",ce="createElement",ac="appendChild",st="style",ds="display",n="none",gi="getElementById",lp=d.location.protocol,wp=lp.indexOf("http")==0?lp:"https:";var i=d[ce]("iframe");i[st][ds]=n;d[gi]("M360256ScriptRootC308660")[ac](i);try{var iw=i.contentWindow.document;iw.open();iw.writeln("<ht"+"ml><bo"+"dy></bo"+"dy></ht"+"ml>");iw.close();var c=iw[b];}catch(e){var iw=d;var c=d[gi]("M360256ScriptRootC308660");}var dv=iw[ce]("div");dv.id="MG_ID";dv[st][ds]=n;dv.innerHTML=308660;c[ac](dv);var s=iw[ce]("script");s.async="async";s.defer="defer";s.charset="utf-8";s.src=wp+"//jsc.mgid.com/j/o/joqalbania.com.308660.js?t="+D.getYear()+D.getMonth()+D.getUTCDate()+D.getUTCHours();c[ac](s);})();<\/script></div>');
                            } catch(e) {
                                console.log(e);
                            }

                        }

                        try {
                            postscribe('#photogallery_pos2', '<div id="boost-42"><script> var w_=42,n_=14,bs=document.createElement("script");bs.id="b-" + Math.floor(Math.random() * 1000);bs.type="text/javascript"; bs.src="https://static.boostcdn.net/js/b_infinite.js";bs.async=true;document.getElementById("boost-42").appendChild(bs);</script></div>');
                        } catch(e) {
                            console.log(e);
                        }

                    }


                    // append JOQ banner on MOBILE ALBANIA
                    try {
                        postscribe('#joq-banner-mob', '<div style="padding: 10px;background: #000;font-size: 18px;font-family: Roboto;letter-spacing: 0.5px;text-align: center;line-height: 1.3;"><a style="color: #fff;" href="https://m.facebook.com/groups/komunitetiJOQ/" target="_blank">Klikoni këtu për t’u bërë pjesë e Komunitetit të JOQ Albania</a></div>');
                    } catch(e) {}


                    //VODAFONE MOB
                    try {
                        postscribe('#vod-mob', '<script language="javascript" src="https://track.adform.net/adfscript/?bn=34760120"><\/script><noscript><a href="https://track.adform.net/C/?bn=34760120;C=0" target="_blank"><img src="https://track.adform.net/adfserve/?bn=34760120;srctype=4;ord=[timestamp]" border="0" width="300" height="100" alt=""/></a><\/noscript>');

                    } catch(e) {
                        console.log(e);
                    }

                }

            });


        // PC
        } else {

            //MGID right pc joq.al
            var full_url = window.location.href;
            if (full_url.toLowerCase().indexOf("joq.al") >= 0) {

                try {

                    postscribe('#mgid-right-pc', '<div id="M357419ScriptRootC308656"><div id="M357419PreloadC308656">Loading...    </div><script>(function(){var D=new Date(),d=document,b="body",ce="createElement",ac="appendChild",st="style",ds="display",n="none",gi="getElementById",lp=d.location.protocol,wp=lp.indexOf("http")==0?lp:"https:";var i=d[ce]("iframe");i[st][ds]=n;d[gi]("M357419ScriptRootC308656")[ac](i);try{var iw=i.contentWindow.document;iw.open();iw.writeln("<ht"+"ml><bo"+"dy></bo"+"dy></ht"+"ml>");iw.close();var c=iw[b];}catch(e){var iw=d;var c=d[gi]("M357419ScriptRootC308656");}var dv=iw[ce]("div");dv.id="MG_ID";dv[st][ds]=n;dv.innerHTML=308656;c[ac](dv);var s=iw[ce]("script");s.async="async";s.defer="defer";s.charset="utf-8";s.src=wp+"//jsc.mgid.com/j/o/joq.al.308656.js?t="+D.getYear()+D.getMonth()+D.getUTCDate()+D.getUTCHours();c[ac](s);})();<\/script></div>');

                } catch(e) {

                    console.log(e);

                }

                
            }


            // NimiTV PC
            try {
                postscribe('#nimi-tv', '<div class="pc_only" style="width:980px; height:auto; margin:5px auto;"><div class="adunit-1" data-adunit="joq__980x150" data-dimensions="980x150" style="width:980px; height:auto;"></div></div>');

            } catch(e) {
                console.log(e);
            }


            $('.itemIntroText').children(':eq(5)').after('<div id="tirbank_inside_news" class="mobile_only" style="margin: -10px auto 10px;"></div>');
                    postscribe('#tirbank_inside_news', '<div class="mobile_only" style="width:300px; height:auto; margin:0 auto 0;"><div class="adunit-1" data-adunit="joq__MOB-300x100-1" data-dimensions="300x100" style="width:300px; height:auto;"></div></div>');


            //MGID right pc joqalbania.com
            if (full_url.toLowerCase().indexOf("joq-albania.com") >= 0) {

                try {

                    postscribe('#mgid-right-pc', '<div id="M360256ScriptRootC308660"><div id="M360256PreloadC308660">Loading...    </div><script>(function(){var D=new Date(),d=document,b="body",ce="createElement",ac="appendChild",st="style",ds="display",n="none",gi="getElementById",lp=d.location.protocol,wp=lp.indexOf("http")==0?lp:"https:";var i=d[ce]("iframe");i[st][ds]=n;d[gi]("M360256ScriptRootC308660")[ac](i);try{var iw=i.contentWindow.document;iw.open();iw.writeln("<ht"+"ml><bo"+"dy></bo"+"dy></ht"+"ml>");iw.close();var c=iw[b];}catch(e){var iw=d;var c=d[gi]("M360256ScriptRootC308660");}var dv=iw[ce]("div");dv.id="MG_ID";dv[st][ds]=n;dv.innerHTML=308660;c[ac](dv);var s=iw[ce]("script");s.async="async";s.defer="defer";s.charset="utf-8";s.src=wp+"//jsc.mgid.com/j/o/joqalbania.com.308660.js?t="+D.getYear()+D.getMonth()+D.getUTCDate()+D.getUTCHours();c[ac](s);})();<\/script></div>');

                } catch(e) {

                    console.log(e);

                }

                
            }


            


            /*try {
                
                var the_rev_id3 = 'rcjsload_09e8ed';
                var the_rev_w3 = '103227';

                //second banner after gallery revcontent
                postscribe('#pc-under-news', '<div id="M360256ScriptRootC360246"><div id="M360256PreloadC360246">Loading...    </div><script>(function(){var D=new Date(),d=document,b="body",ce="createElement",ac="appendChild",st="style",ds="display",n="none",gi="getElementById",lp=d.location.protocol,wp=lp.indexOf("http")==0?lp:"https:";var i=d[ce]("iframe");i[st][ds]=n;d[gi]("M360256ScriptRootC360246")[ac](i);try{var iw=i.contentWindow.document;iw.open();iw.writeln("<ht"+"ml><bo"+"dy></bo"+"dy></ht"+"ml>");iw.close();var c=iw[b];}catch(e){var iw=d;var c=d[gi]("M360256ScriptRootC360246");}var dv=iw[ce]("div");dv.id="MG_ID";dv[st][ds]=n;dv.innerHTML=360246;c[ac](dv);var s=iw[ce]("script");s.async="async";s.defer="defer";s.charset="utf-8";s.src=wp+"//jsc.mgid.com/j/o/joqalbania.com.360246.js?t="+D.getYear()+D.getMonth()+D.getUTCDate()+D.getUTCHours();c[ac](s);})();<\/script></div>');

            } catch(e) {

                console.log(e);

            }*/

            if (full_url.toLowerCase().indexOf("joqalbania.com") >= 0) {

                try {
                    postscribe('#pc-under-news', '<div id="boost-30"><script> var w_=30,n_=14,bs=document.createElement("script");bs.id="b-" + Math.floor(Math.random() * 1000);bs.type="text/javascript";bs.src="https://static.boostcdn.net/js/b_infinite.js";bs.async=true;document.getElementById("boost-30").appendChild(bs);<\/script></div>');
                } catch(e) {
                    console.log(e);
                }


            } else if (full_url.toLowerCase().indexOf("joq-albania.com") >= 0) {

                try {
                    postscribe('#pc-under-news', '<div id="boost-42"><script> var w_=42,n_=14,bs=document.createElement("script");bs.id="b-" + Math.floor(Math.random() * 1000);bs.type="text/javascript"; bs.src="https://static.boostcdn.net/js/b_infinite.js";bs.async=true;document.getElementById("boost-42").appendChild(bs);</script></div>');
                } catch(e) {
                    console.log(e);
                }

            }


            
            $.post("https://dynamic-php.abingmedia.com/country2.php", function (data) {
                var rc_country = JSON.parse(data).country;


                if (rc_country != 'AL' && rc_country != '') {

                    // PC IMPULS
                    try {
                        postscribe('#pc-impuls', '<script src="https://www.cdnimpuls.com/ads/ads.js"><\/script>');
                    } catch(e) {}

                    /*try {
                
                        //second banner after gallery revcontent
                        postscribe('#pc-under-news', '<div id="M360256ScriptRootC360246"><div id="M360256PreloadC360246">Loading...    </div><script>(function(){var D=new Date(),d=document,b="body",ce="createElement",ac="appendChild",st="style",ds="display",n="none",gi="getElementById",lp=d.location.protocol,wp=lp.indexOf("http")==0?lp:"https:";var i=d[ce]("iframe");i[st][ds]=n;d[gi]("M360256ScriptRootC360246")[ac](i);try{var iw=i.contentWindow.document;iw.open();iw.writeln("<ht"+"ml><bo"+"dy></bo"+"dy></ht"+"ml>");iw.close();var c=iw[b];}catch(e){var iw=d;var c=d[gi]("M360256ScriptRootC360246");}var dv=iw[ce]("div");dv.id="MG_ID";dv[st][ds]=n;dv.innerHTML=360246;c[ac](dv);var s=iw[ce]("script");s.async="async";s.defer="defer";s.charset="utf-8";s.src=wp+"//jsc.mgid.com/j/o/joqalbania.com.360246.js?t="+D.getYear()+D.getMonth()+D.getUTCDate()+D.getUTCHours();c[ac](s);})();<\/script></div>');

                    } catch(e) {
                        console.log(e);
                    }*/


                    //postscribe('#floating-left', '<div class="adunit-2" data-adunit="adxp_jetaoshqef_160x600" data-dimensions="160x600" style="width:160px; height:600px;"></div>');
                    
                } else {


                    // append JOQ banner on PC ALBANIA
                    try {
                        postscribe('#joq-banner', '<div style="padding: 16px;background: #000;font-size: 18px;font-family: Roboto;letter-spacing: 0.5px;text-align: center;line-height: 1.3;"><a style="color: #fff;" href="https://facebook.com/groups/komunitetiJOQ/" target="_blank">Klikoni këtu për t’u bërë pjesë e Komunitetit të JOQ Albania</a></div>');
                    } catch(e) {}


                    // Vodafone PC Albania
                    try {
                        postscribe('#vod-pc', '<script language="javascript" src="https://track.adform.net/adfscript/?bn=34876499"><\/script><noscript><a href="https://track.adform.net/C/?bn=34876499;C=0" target="_blank"><img src="https://track.adform.net/adfserve/?bn=34876499;srctype=4;ord=[timestamp]" border="0" width="300" height="250" alt=""/></a><\/noscript>');

                    } catch(e) {
                        console.log(e);
                    }

                }
                 
            });

            //appendRevcontent_v1('rcjsload_6b7ff0', 66401);
            
            //postscribe('#rcjsload_6b7ff0', '<div id="M228416ScriptRootC223387"><div id="M228416PreloadC223387">Loading...    </div><script>(function(){var D=new Date(),d=document,b="body",ce="createElement",ac="appendChild",st="style",ds="display",n="none",gi="getElementById";var i=d[ce]("iframe");i[st][ds]=n;d[gi]("M228416ScriptRootC223387")[ac](i);try{var iw=i.contentWindow.document;iw.open();iw.writeln("<ht"+"ml><bo"+"dy></bo"+"dy></ht"+"ml>");iw.close();var c=iw[b];}catch(e){var iw=d;var c=d[gi]("M228416ScriptRootC223387");}var dv=iw[ce]("div");dv.id="MG_ID";dv[st][ds]=n;dv.innerHTML=223387;c[ac](dv);var s=iw[ce]("script");s.async="async";s.defer="defer";s.charset="utf-8";s.src="//jsc.mgid.com/j/o/joq.al.223387.js?t="+D.getYear()+D.getMonth()+D.getUTCDate()+D.getUTCHours();c[ac](s);})();<\/script></div>');
            
            
















        }
    }





    $(".adunit-1").dfp({
        dfpID: '197741849',
        collapseEmptyDivs: true/*,
        afterAllAdsLoaded: function () {
            $(".lupon-unit").dfp({
                dfpID: '194204832',
                collapseEmptyDivs: true
            });
        }*/
    });
    
    

});
