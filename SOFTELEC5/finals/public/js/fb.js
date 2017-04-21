window.fbAsyncInit = function() {
FB.init({
  appId      : '2274112476146489',
  xfbml      : true,
  version    : 'v2.8'
});
FB.AppEvents.logPageView();
};

(function(d, s, id){
 var js, fjs = d.getElementsByTagName(s)[0];
 if (d.getElementById(id)) {return;}
 js = d.createElement(s); js.id = id;
 js.src = "//connect.facebook.net/en_US/sdk.js";
 fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));


function shareFacebook(id, picture, title){
  FB.ui({
  method: 'share',
  display: 'popup',
  title: title,
  picture: 'http://24e475df.ngrok.io/' + picture,
  href: 'http://24e475df.ngrok.io/article/' + id,
  }, function(response){});
}
    /*2274130652811338*/
