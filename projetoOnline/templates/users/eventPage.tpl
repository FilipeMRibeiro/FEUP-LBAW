<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.5 -->
    <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">

    <link rel="stylesheet" href="../css/event_page.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">

    <link href='https://fonts.googleapis.com/css?family=Roboto:500' rel='stylesheet' type='text/css'>

    <title>Pawz - {$eventInfo.name} </title>
  </head>
  {include file='common/headerAndNav.tpl'}
    <div class="container-fluid main">
      <div class="row">
        <div class="col-lg-2 col-md-3 col-sm-4 col-xs-4 profile-information-space">
          <div class="row">
            <div class="col-lg-12 profile-image">
              <img src="../images/defaultProfilePicture.png" alt="Profile Picture"/>
            </div>
          </div>
          <div class="row">
            <div class="col-lg-12 profile-information panel panel-default">
              <p><span class="event-name"> {$eventInfo.name} </span> </p>
              <p><i class="fa fa-paw fa-lg"> {$eventInfo.description} </i></p>
			  <p><i class="fa fa-birthday-cake fa-lg"> {$eventInfo.date} </i></p>
			  <p><i class="fa fa-map-marker fa-lg"> {$eventInfo.local} </i></p>
              <p><i class="fa fa-user fa-lg"> Creator: <a href="../pages/showProfilePage.php?username={$eventInfo.username}"> {$eventInfo.username} </a></i></p>
              <form method="POST" class="joinEvent" action="#" role="form">
                <div class="col-lg-10 join">
				  <input type="hidden" name="eventid" required value={$eventID}>
				  <i class="fa fa-user fa-lg"><a class="joinEvent" href="">  Join Event </a></i></p>
                </div>
              </form>
            </div>
          </div>
        </div>
        <div class="col-lg-5 col-lg-offset-1 col-xs-12 feed-space">
         <!-- <div class="row">
            <div class="col-lg-12 post-bar panel panel-default">
              <form method="POST" class="submitPost" action="#" role="form">
                <div class="col-lg-10 share">
                  <input type="text" name="description" required class="form-control" placeholder="Share Something...">
                </div>
                <div class="col-lg-2 share-button">
                  <button type="submit" id="submitButton" class="btn btn-info"> Share </button>
                </div>
              </form>
            </div>
          </div> -->

          <div class="recentlyCreatedPostSpace"></div>
          {foreach $posts as $post}

          <div class="row post-row">
            <div class="col-lg-3 post-profile-picture">
              <img class="img" src="../images/defaultProfilePicture.png" alt="Profile Picture"/>
            </div>
            <div class="col-lg-9 post-information">
              <div class="row">
                <div class="col-lg-12 post-owner-description">
                  <h3><a href="showProfilePage.php?username={$post.username}"> {$post.username} </a></h3>
                  <p> {$post.description} </p>
                  <p style="color: grey;"> {$post.date}  </p>
                  <div id="pointer"></div>
                </div>
              </div>
              <!--
              <div class="row">
                <div class="col-lg-12 post-image">
                  <img class="img" src="../images/rex_and_bae.png" style="width: 90%;" alt="Image Posted"/>
                </div>
              </div>
              <div class="row">
                <div class="col-lg-12 post-comments-likes">
                  <p> <i class="fa fa-thumbs-up"></i> 10 <i class="fa fa-comment"></i> 4 </p>
                </div>
              </div>
            -->
            </div>
          </div>

         {/foreach}

        </div>
        <!-- <div class="col-lg-3 col-lg-offset-1 activities-awards-column">
          <div class="row">
            <div class="col-lg-12 activities panel panel-default">
              <h2 class="panel-heading">Recent Activities</h2>
              <ul class="panel-content">
                <li>  Running </li>
                <li> Hunting </li>
              </ul>
            </div>
          </div>
          <div class="row">
            <div class="col-lg-12 awards panel panel-default">
              <h2 class="panel-heading">Awards(3)</h2>
              <div class="panel-body">
                <img src="../images/award.png" style="width: 30%" alt="Award"/>
                <img src="../images/award.png" style="width: 30%" alt="Award"/>
                <img src="../images/award.png" style="width: 30%" alt="Award"/>
                <p></p>
                <a href=#>See all</a>
              </div>
            </div>
          </div>
        </div> -->
      </div>
    </div>


    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>

    <script src="../javascript/joinEvent.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="../bootstrap/js/bootstrap.min.js"></script>
  </body>
</html>
