var postID;

$(function() {
  $("#submitButton").click(function(e) {
    e.preventDefault();
    var formData = new FormData($('.submitPost')[0]);
    $.ajax({
      type: 'post',
      url: '../pages/submitFeedPost.php',
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

$('.commentsPost').submit(function(e) {
  e.preventDefault();
  var postid = $(this).find('.getPostID').text();
  postID = postid;
  var commentsClass = $(this).find('.comments');
  var commentsSpaceClass = $('.comments-space' + postid);
  var formData = "&postid="+postid;
  commentsSpaceClass.show();

  $('.comments-space' + postID).find('.comment-form').submit(function(e){
    e.preventDefault();
    var formData = $(this).serialize();
    formData += "&postid=" + postID;
    $.ajax({
      type: 'post',
      url: '../pages/createComment.php',
      data: formData,
      success: function(html) {
        $('.comments-space' + postID).find('.comment-text').val('');
        $('.comments-space' + postID).find('.new-comments').append(html);
      }
    });
  });
});
