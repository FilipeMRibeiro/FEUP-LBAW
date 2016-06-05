<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.5 -->
    <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">

    <link rel="stylesheet" href="../css/messages_page.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">

    <link href='https://fonts.googleapis.com/css?family=Roboto:500' rel='stylesheet' type='text/css'>

    <title>Pawz</title>
  </head>
  {include file='common/headerAndNav.tpl'}
  <span class="session-Username" style="display:none;">{$username}</span>
  <div class="container-fluid main">
    <div class="row">
      <div class="col-lg-12 panel panel-default">
        <h2 class="panel-heading"> Messages </h2>
        <div class="col-lg-3" !--style="border-right-style: solid; max-height: 700px;" >
          <div class="panel-content chat-content">
            {foreach $chats as $chat}
            <div class="chat-box{$chat.name} chat-box">
              <span class="getChatID" style="display:none;">{$chat.chatid} </span>
              <div class="chatFill"> </div>
            </div>
            {/foreach}
          </div>
        </div>
        {foreach $chats as $chat}
        <div class="col-lg-9 chat-messages chat{$chat.chatid} non-selected" >
          <div class="panel-content">
            <div class="col-lg-12">
              <div class="row">
                <div class="col-lg-12 panel panel-default messages-panel messages-panel{$chat.chatid}" style="height:300px;">
                  <div class="chat-space{$chat.chatid} chat-space">

                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-lg-12">
                  <form action="#" class="messageForm" method="POST" role="form">
                    <input type="text" name="description" required class="form-control messageToSend{$chat.chatid}" style="padding-bottom: 10%; padding-top: 2%;" placeholder="Write a message...">
                    <button type="submit" class="btn btn-info pull-right submitMessage"> Send </button>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
        {/foreach}
      </div>
    </div>
  </div>

  <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>

  <script src="../javascript/friendRequest.js"></script>
  <script src="../javascript/messages.js"></script>

  <!-- Include all compiled plugins (below), or include individual files as needed -->
  <script src="../bootstrap/js/bootstrap.min.js"></script>
</body>
</html>
