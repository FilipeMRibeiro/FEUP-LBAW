$('form').on('submit',function(e){
   var regex = new RegExp("^[a-zA-Z0-9]{5,15}$");
   var regexPassword = new RegExp("^([a-zA-Z0-9@*#]{8,15})$");
   $('.password-error-1').css({"display": "none"});
   $('.password-error-2').css({"display": "none"});
   $('.email-error').css({"display": "none"});
   $('.username-error').css({"display": "none"});
   if($('.password').val()!=$('.confirmPassword').val()){
       $('.password-error-1').css({"display": "inline"});
       return false;
   }
   else if($('.email').val()!=$('.confirmEmail').val()){
       $('.email-error').css({"display": "inline"});
       return false;
   }
   else if(!regex.test($('.username').val())) {
     $('.username-error').css({"display": "inline"});
     return false;
   }
   else if(!regexPassword.test($('.password').val())) {
     $('.password-error-2').css({"display": "inline"});
     return false;
   }
   else {
     var formData = $('form').serialize();
     e.preventDefault();
     $.ajax({
       type: 'post',
       url: '../pages/checkRegister.php',
       data: formData,
       success: function(response) {
         if(response == 'Username already in use')
            alert(response)
         else {
            window.location.replace("../pages/login.html");
            alert('Your account was successfully registered!');
          }
         return true;
       }
     });
   }
   return true;
});
