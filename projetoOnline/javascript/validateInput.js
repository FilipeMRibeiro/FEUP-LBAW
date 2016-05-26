$('form').on('submit',function(e){
   if($('.password').val()!=$('.confirmPassword').val()){
       alert('Passwords don\'t match');
       return false;
   }
   else if($('.email').val()!=$('.confirmEmail').val()){
       alert('Emails don\'t match');
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
         else
            window.location.replace("../pages/login.html");
         return false;
       }
     });
   }
   return true;
});
