$('form').on('submit',function(){
   if($('.password').val()!=$('.confirmPassword').val()){
       alert('Passwords don\'t match');
       return false;
   }
   return true;
});

$('form').on('submit',function(){
   if($('.email').val()!=$('.confirmEmail').val()){
       alert('Emails don\'t match');
       return false;
   }
   return true;
});
