$(function() {
  $("#submitButton").click(function(e) {
    e.preventDefault();
    var formData = new FormData($('.submitPost')[0]);
    $.ajax({
      type: 'post',
      url: '../pages/submitProfilePost.php',
      data: formData,
      processData: false,
      contentType: false,
      success: function(html) {
        $('.recentlyCreatedPostSpace').prepend(function() {
          return $(html).hide().fadeIn(1000);
        });
      }
    });
    $('.submitPost input').val('');
  });
});
