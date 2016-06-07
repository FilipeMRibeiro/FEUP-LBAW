$(function() {
  $(".joinEvent").click(function(e) {
	  
	var formData = $('.joinEvent').serialize();
    e.preventDefault();
    $.ajax({
      type: 'post',
      url: '../pages/joinEvent.php',
	  data: formData,
      success: function(html){
        alert("Joined Event!");
        console.log(html);
      }
    });
  });
});
