window.fbAsyncInit = function() {
    FB.init({
      appId      : '1754319418117348',
      xfbml      : true,
      version    : 'v2.7'
    });
  };

  (function(d, s, id){
     var js, fjs = d.getElementsByTagName(s)[0];
     if (d.getElementById(id)) {return;}
     js = d.createElement(s); js.id = id;
     js.src = "sdk.js"/*tpa=http://connect.facebook.net/vi_VN/sdk.js*/;
     fjs.parentNode.insertBefore(js, fjs);
   }(document, 'script', 'facebook-jssdk'));


// (function(d, s, id) {
//   var js, fjs = d.getElementsByTagName(s)[0];
//   if (d.getElementById(id)) return;
//   js = d.createElement(s); js.id = id;
//   js.src = "sdk.js#xfbml=1&version=v2.7"/*tpa=http://connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v2.7*/;
//   fjs.parentNode.insertBefore(js, fjs);
// }(document, 'script', 'facebook-jssdk'));