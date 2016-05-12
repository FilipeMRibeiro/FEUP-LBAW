$(function() {
  $("#submitButton").click(function(e) {
    e.preventDefault();
    var formData = $('.submitPost').serialize();
    $.ajax({
      type: 'post',
      url: '../pages/submitFeedPost.php',
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
