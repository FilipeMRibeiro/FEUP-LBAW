$(function() {
  $(".accept").click(function(e) {
    var username = $(".username").html();
    var chatID = $(".chatID").html();
    $(this).replaceWith('<p><p style="color: green;"> Friend Request Accepted</p> </p>');
    $(".decline").hide();
    e.preventDefault();
    $.ajax({
      type: 'POST',
      url: '../pages/acceptFriendRequest.php',
      data: {
        senderUsername: username,
        chatID: chatID
      },
      success: function(html) {
        alert("Friend request accepted!");
      }
    });
  });
});

$(function() {
  $(".decline").click(function(e) {
    e.preventDefault();
    $.ajax({
      type: 'GET',
      url: '../pages/declineFriendRequest.php',
      success: function(html) {
        alert("Friend request declined!");
        $(".decline").replaceWith('<p><p style="color: red;"> Friend Request Declined</p> </p>');
        $(".accept").hide();
      }
    });
  });
});
