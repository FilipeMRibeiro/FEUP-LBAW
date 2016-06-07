$(function() {
  $("#newAwardBtn").click(function(e) {
	
    var formData = $('.newAward').serialize();
	
	e.preventDefault();
    $.ajax({
      type: 'post',
      url: '../pages/createAward.php',
      data: formData,
      success: function(html) {
        $('.awards-column').replaceWith(function() {
          return $(html).hide().fadeIn(1000);
        });
		window.location.reload(true);
      }
    });
  });
});
