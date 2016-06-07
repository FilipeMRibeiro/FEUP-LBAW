$(function() {
  $(".joinGroup").click(function(e) {
	  
	var formData = $('.joinGroup').serialize();
    e.preventDefault();
    $.ajax({
      type: 'post',
      url: '../pages/joinGroup.php',
	  data: formData,
      success: function(html){
        alert("Joined Group!");
        console.log(html);
      }
    });
  });
});
