$(function() {
  $("#upvoteButton").click(function(e) {
    e.preventDefault();
    var postid = $('.likePost').find('.meuPostID').text();
    console.log(postid);
    var formData = "&postid="+postid;
    $.ajax({
      type: 'post',
      url: '../pages/upvotePost.php',
      data: formData,
      success: function(html) {
        //location.reload();
      }
    });
  });
});