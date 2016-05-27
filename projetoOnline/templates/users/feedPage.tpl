<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.5 -->
    <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">

    <link rel="stylesheet" href="../css/feed_page.css">
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
        <div class="col-lg-9 col-xs-12 feed-space">
          <div class="row">
            <div class="col-lg-12 post-bar panel panel-default">
              <form action="#" class="submitPost" method="POST" role="form">
                <div class="col-lg-2 picture-share-something">
                  <img class="img" src="../images/defaultProfilePicture.png" alt="Profile Picture"/>
                </div>
                <div class="col-lg-8 share">
                  <input type="text" name="description" required class="form-control" placeholder="Share Something...">
                </div>
                <div class="col-lg-2 share-button">
                  <button type="submit" id="submitButton" class="btn btn-info"> Share </button>
                </div>
              </form>
            </div>
          </div>

          <div class="recentlyCreatedPostSpace"></div>
          {foreach $posts as $post}

          <div class="row post-row">
            <div class="col-lg-2 post-profile-picture">
              <img class="img" src="../images/defaultProfilePicture.png" alt="Profile Picture"/>
            </div>
            <div class="col-lg-10 post-information">
              <div class="row">
                <div class="col-lg-12 post-owner-description">
                  <h3><a href="../pages/showProfilePage.php?username={$post.username}"> {$post.username} </a> </h3>
                  <p> {$post.description}. </p>
                  <p style="color: grey;"> {$post.date}  </p>
                  <div id="pointer"></div>
                </div>
              </div>
              <!--
              <div class="row">
                <div class="col-lg-8 post-image">
                  <img class="img" src="../images/sloth-chilling.jpg" style="width: 90%;" alt="Image Posted"/>
                </div>
              </div>
              <div class="row">
                <div class="col-lg-12 post-comments-likes">
                  <p> <i class="fa fa-thumbs-up"></i> 2 <i class="fa fa-comment"></i> 0 </p>
                </div>
              </div>
            -->
            </div>
          </div>

          {/foreach}

        </div>
        <div class="col-lg-3 col-md-3 col-sm-4 col-xs-4">
          <div class="row">
            <div class="col-lg-12 groups panel panel-default">
              <h2 style="text-align: center;" class="panel-heading"> <a href="../pages/showGroups.php"> Groups </a> </h2>
              <div class="panel-content">
                <ul>
                  <li> <img class="img" src="../images/german_shepherd_group.JPG" style="width: 100%;"/> German Shepherds group </li>
                  <li> <img class="img" src="../images/dog-group.jpg" style="width: 100%;"/> Dogs group </li>
                </ul>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-lg-12 events panel panel-default">
              <h3 style="text-align: center;" class="panel-heading"> <a href="../pages/showEvents.php"> Events </a> </h3>
              <ul class="panel-content">
                <li>
                  <h4> Dogs Race </h4>
                  <img src="../images/corrida-caes.jpg" style="width: 100%;"/>
                  <p> Friday 20:00h, 18 March 2016 </p>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>


    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>

    <script src="../javascript/feedPost.js"></script>

    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="../bootstrap/js/bootstrap.min.js"></script>
  </body>
</html>
