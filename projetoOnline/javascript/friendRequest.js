$(function() {
  $(".chat-space").on('click', '.accept', function(e) {
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
  $(".chat-space").on('click', '.decline', function(e) {
    var username = $(".username").html();
    var chatID = $(".chatID").html();
    $(this).replaceWith('<p><p style="color: red;"> Friend Request Declined</p> </p>');
    $(".decline").hide();
    e.preventDefault();
    $.ajax({
      type: 'POST',
      url: '../pages/declineFriendRequest.php',
      data: {
        senderUsername: username,
        chatID: chatID
      },
      success: function(html) {
        alert("Friend request declined!");
      }
    });
  });
});
