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
  <div class="container-fluid main">
    <div class="row">
      <div class="col-lg-12 panel panel-default">
        <h2 class="panel-heading"> Messages </h2>
        <div class="col-lg-3" style="border-right-style: solid; max-height: 700px;">
          <div class="panel-content">
            {foreach $chats as $chat}
            <div class="row message-box">
              <div class="col-lg-3 vcenter profile-picture">
                <img src="../images/defaultProfilePicture.png"/>
              </div>
              <div class="col-lg-8 vcenter last-message">
                <p class="profile-name">{$chat.username}</p>
                <p>{$chat.message.description}</p>
              </div>
            </div>
            {/foreach}
          </div>
        </div>
        <div class="col-lg-9 message">
          <div class="panel-content">
            <div class="col-lg-12">
              <div class="row">
                <div class="col-lg-12 panel panel-default" style="min-height:300px;">
                  <div class="row message">
                    <div class="col-lg-1 message-profile-picture">
                      <img src="../images/defaultProfilePicture.png"/>
                    </div>
                    <div class="col-lg-10 message-content">
                      <p class="profile-name">{$chats[0].username}</p>
                      <p> {$chats[0].message.description} </p>
                      <p> {$chats[0].message.date} </p>
                    </div>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-lg-12">
                  <input type="text" class="form-control" style="padding-bottom: 10%; padding-top: 2%;" placeholder="Write a message...">
                  <button type="submit" class="btn btn-info pull-right"> Send </button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>

  <script src="../javascript/friendRequest.js"></script>

  <!-- Include all compiled plugins (below), or include individual files as needed -->
  <script src="../bootstrap/js/bootstrap.min.js"></script>
</body>
</html>
