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
      }
    });
  });
});

$(function() {
  $(".send-message-form").submit(function(e) {
    var username = $(".receiverUsername").html();
    e.preventDefault();
    var formData = $(this).serialize();
    formData += '&receiverUsername=' + username;
    $.ajax({
      type: 'post',
      url: '../pages/sendMessage.php',
      data: formData,
      success: function(html) {
        alert("Message sent!");
        location.reload();
      }
    });
  });
});
