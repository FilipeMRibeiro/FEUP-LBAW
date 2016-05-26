$('form').on('submit', function(e) {
  var formData = $('form').serialize();
  e.preventDefault();
  $.ajax({
    type: 'post',
    url: '../pages/checkLogin.php',
    data: formData,
    success: function(response) {
      if(response == 'Login error')
         $('.login-error').css({"display": "inline"});
      else {
         window.location.replace("../pages/showFeedPage.php");
       }
      return true;
    }
  });
});
