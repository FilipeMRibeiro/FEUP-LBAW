$(function() {
  $(".addFriend").click(function(e) {
    var username = $(".receiverUsername").html();
    e.preventDefault();
    $.ajax({
      type: 'post',
      url: '../pages/addFriend.php',
      data: {
        receiverUsername: username
      },
      success: function(html) {
        alert("Friend request sent!");
        console.log(html);
      }
    });
  });
});
