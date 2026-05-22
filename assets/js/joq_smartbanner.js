
    function smartWebBanner() {
       
       $().smartWebBanner({
            title: "JOQ.al", // What the title of the "app" should be in the banner | Default: "Web App"
            titleSwap: true, // Whether or not to use the title specified here has the default label of the home screen icon (otherwise uses the page's <title> tag) | Default: true
            url: 'joq.al', // URL to mask the page as before saving to home screen (allows for having it save the homepage of a site no matter what page the visitor is on) | Default: ""
            author: "Jeta Osh Qef", // What the author of the "app" should be in the banner | Default: "Save to Home Screen"
            speedIn: 300, // Show animation speed of the banner | Default: 300
            speedOut: 400, // Close animation speed of the banner | Default: 400
            useIcon: true, // Whether or not it should show site's apple touch icon (located via <link> tag) | Default: true
            iconOverwrite: "http://joq.al/assets/images/icons/icon.png", // Force the URL of the icon (even if found via <link> tag) | Default: ""
            iconGloss: "auto", // Whether or not to show the gloss over the icon (true/false/"auto" [auto doesn't show if precomposed <link> tag is used]) | Default: "auto"
            showFree: true, // Whether or not to show "Free" at bottom of info | Default: true
            daysHidden: 15, // Duration to hide the banner after being closed (0 = always show banner) | Default: 15
            daysReminder: 90, // Duration to hide the banner after "Save" is clicked *separate from when the close button is clicked* (0 = always show banner) | Default: 90
            popupDuration: 6000, // How long the instructions are shown before fading out (0 = show until manually closed) | Default: 6000
            popupSpeedIn: 200, // Show animation speed of the popup | Default: 200
            popupSpeedOut: 900, // Close animation speed of the popup | Default: 900
            theme: "auto", // Change between "auto", "iOS 7", "iOS 6" & "dark" themes to fit your site design | Default: "auto"
            autoApp: false, // Whether or not it should auto-add the mobile-web-app meta tag that makes it open as an app rather than in mobile safari | Default: false
            debug: true // Whether or not it should always be shown (even for non-iOS devices & if cookies have previously been set) *This is helpful for testing and/or previewing | Default: false
        });  

    }


    function getMobileOperatingSystem() {
      var userAgent = navigator.userAgent || navigator.vendor || window.opera;

          // Windows Phone must come first because its UA also contains "Android"
        if (/windows phone/i.test(userAgent)) {
            return "Windows Phone";
        }

        if (/android/i.test(userAgent)) {
            return "Android";
        }

        // iOS detection from: http://stackoverflow.com/a/9039885/177710
        if (/iPad|iPhone|iPod/.test(userAgent) && !window.MSStream) {
            return "iOS";
        }

        return "unknown";
    }

    function appendSmartBanner(app_link) {
        

        smartWebBanner();

        $('#swb-instructions').remove();

        $('html').addClass('swb-shown');
        $('.back-home').css({top: '82px', transition: 'top, .3s', transitionDelay: '.05s'});
        $('#swb-save').html('Instalo');

        $('#swb-close').on('click',function(){
            $('html').removeClass('swb-shown');
            $('.back-home').css({top: '6px', transition: 'top, .35s', transitionDelay: '.06s'}); 
        });

        $('#swb-save').on('click', function(e) {
            e.preventDefault();
            var win = window.open(app_link);

        });

    }

	var isSafari = !!navigator.userAgent.match(/Version\/[\d\.]+.*Safari/);
	var is_uiwebview = /(iPhone|iPod|iPad).*AppleWebKit(?!.*Safari)/i.test(navigator.userAgent);


    if( /Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent) ) {

        if(!window.location.hash) {
            if (getMobileOperatingSystem() == 'iOS') {

	      		if(!isSafari) {
	      			if(!is_uiwebview) {
	      				appendSmartBanner('itmss://itunes.apple.com/al/app/joq-al/id1224913299?mt=8');
	      			}
	      		}

	        } else if (getMobileOperatingSystem() == 'Android') {

	        	appendSmartBanner('https://play.google.com/store/apps/details?id=com.jetaoshqef.al');

	        }
        }
        
    }