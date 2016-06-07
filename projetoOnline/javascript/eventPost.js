$(function() {
  $("#submitButton").click(function(e) {
	
    var formData = $('.submitPost').serialize();
	
	e.preventDefault();
    $.ajax({
      type: 'post',
      url: '../pages/submitEventPost.php',
      data: formData,
      success: function(html) {
        $('.recentlyCreatedPostSpace').replaceWith(function() {
          return $(html).hide().fadeIn(1000);
        });
      }
    });
    $('.submitPost input').val('');
  });
});
