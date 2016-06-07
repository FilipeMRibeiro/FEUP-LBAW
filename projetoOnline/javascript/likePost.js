$(function() {
  $(".likePost").submit(function(e) {
    e.preventDefault();
    var postid = $(this).find('.getPostID').text();
    console.log(postid);
    var upvotesClass = $(this).find('.upvotes');
    var likeButton = $(this).find('#upvoteButton');
    var likedButton = $(this).find('#downvoteButton');
    var formData = "&postid="+postid;
    if(likeButton.text() != '')
      $.ajax({
        type: 'post',
        url: '../pages/upvotePost.php',
        data: formData,
        success: function(numberOfUpvotes) {
          upvotesClass.text(numberOfUpvotes);
          likeButton.replaceWith('<button type="submit" id="downvoteButton" class="btn btn-info"> Liked </button>');
        }
      });
    if(likedButton.text() != '')
      $.ajax({
        type: 'post',
        url: '../pages/downvotePost.php',
        data: formData,
        success: function(numberOfUpvotes) {
          upvotesClass.text(numberOfUpvotes);
          likedButton.replaceWith('<button type="submit" id="upvoteButton" class="btn btn-info"> Like </button>');
        }
      });
  });
});
