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
                  <img class="img" src="../uploads/profile-picture/{$username}" onerror="this.src='../images/defaultProfilePicture.png'" alt="Profile Picture"/>
                </div>
                <div class="col-lg-8 share">
                  <input type="text" name="description" required class="form-control" placeholder="Share Something...">
                  <input type="file" name="image" id="imageToUpload" accept="image/*">
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
              <img src="../uploads/profile-picture/{$post.username}" onerror="this.src='../images/defaultProfilePicture.png'" alt="Profile Picture"/>
            </div>
            <div class="col-lg-10 post-information">
              <div class="row">
                <div class="col-lg-12 post-owner-description">
                  <h3><a href="../pages/showProfilePage.php?username={$post.username}"> {$post.username} </a> </h3>
                  <p> {$post.description}. </p>
                  <img style="height:40%; width:60%;" onerror="this.style.display='none';" src="../uploads/post-picture/{$post.postid}">
                  <p style="color: grey;"> {$post.date}  </p>
                  <div id="pointer"></div>
                </div>
              </div>
            </div>
            <div class="col-lg-2">
            </div>
            <div class="col-lg-10 ">
            <p> <i class="fa fa-thumbs-up fa-lg"> {$post.upvotes} </i> </p>
            </div>
          </div>

          {/foreach}
        </div>

        <div class="col-lg-3 col-md-3 col-sm-4 col-xs-4">
          <div class="row">
            <div class="col-lg-12 groups panel panel-default">
              <h2 style="text-align: center;" class="panel-heading"> Groups </h2>
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
              <h2 style="text-align: center;" class="panel-heading">Events</h2>
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
