var chatID;
setInterval(checkMessages, 300);
setInterval(checkPreview, 300);

var $chatbox = $('.chat-box');

$chatbox.on('click', function() {
  chatID = $(this).find('.getChatID').text();
  var chat = "chat" + chatID;
  $('.chat-box.active').removeClass("active");
  $(this).addClass('active');
  $('.chat-messages').removeClass("non-selected");
  $('.chat-messages').removeClass("selected");
  $('.chat-messages').addClass("non-selected");

  $('.' + chat).removeClass("non-selected");
  $('.' + chat).addClass("selected");
});


$('.submitMessage').click(function(e) {
  e.preventDefault();
  if($('.messageForm').find('.messageToSend'+chatID).val() != '')
  {
    var formData = '&description=' + $('.messageForm').find('.messageToSend'+chatID).val() + '&chatid=' + chatID;
    $.ajax({
      type: 'post',
      url: '../pages/submitMessage.php',
      data: formData,
      success: function(html) {
      }
    });
    $('.messageForm').find('.messageToSend'+chatID).val('');
  }
});

function checkMessages() {
  $(document).ready(function() {
    $.ajax({
      type: 'post',
      url: '../pages/checkNewMessages.php',
      success: function(html) {
        var html = $.parseHTML(html);
        nodeNames = [];
        $('.chat-space').html('');
        $.each( html, function( i, el ) {
          nodeNames[ i ] = $(this).text().trim();
          nodeNames[i] = nodeNames[i].substr(0,nodeNames[i].indexOf(' '));
          $('.chat-space'+nodeNames[i]).append(el);
        });
      }
    });
  });
}

function checkPreview() {
  $(document).ready(function() {
    $.ajax({
      type: 'post',
      url: '../pages/checkNewPreviewMessages.php',
      success: function(html) {
        var html = $.parseHTML(html);
        nodeNames = [];
        $chatbox.find('.chatFill').html('');
        $.each( html, function( i, el ) {
          nodeNames[ i ] = $(this).text().trim();
          nodeNames[i] = nodeNames[i].substr(0,nodeNames[i].indexOf(' '));
          $('.chat-box'+nodeNames[i]).find('.chatFill').append(el);
        });
      }
    });
  });
}
