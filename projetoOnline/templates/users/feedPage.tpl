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
  <body>
  {include file='common/headerAndNav.tpl'}
    <div class="container-fluid main">
      <div class="row">
        <div class="col-lg-9 col-xs-12 feed-space">
          <div class="row">
            <div class="col-lg-12 post-bar panel panel-default">
              <form action="#" class="submitPost" method="POST" role="form">
                <div class="col-lg-2 picture-share-something">
                  <img src="../uploads/profile-picture/{$username}" onerror="this.src='../images/defaultProfilePicture.png'" alt="Profile Picture"/>
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
                  <p> {$post.description} </p>
                  <p style="color: grey;"> {$post.date}  </p>
                  <div id="pointer"></div>
                </div>
              </div>
            </div>
            <div class="col-lg-2">
            </div>
            <div class="col-lg-1 ">
              <p><form action="#" class="likePost" method="POST">
                <p> <i class="fa fa-thumbs-up fa-lg"><span class="upvotes"> {$post.upvotes}</span> </i> </p>
                <span class="getPostID" style="display:none;"> {$post.postid} </span>
                {if $post.liked eq 0}
                  <button type="submit" id="upvoteButton" class="btn btn-info"> Like </button>
                {else}
                  <button type="submit" id="downvoteButton" class="btn btn-info"> Liked </button>
                {/if}
              </form></p>
            </div>
            <div class="col-lg-2">
              <p><form action="#" class="commentsPost" method="POST">
                <p> <i class="fa fa-comment fa-lg"><span class="comments"> {$post.numberOfComments}</span> </i> </p>
                <span class="getPostID" style="display:none;">{$post.postid} </span>
                  <button type="submit" id="commentsButton" class="btn btn-info"> See Comments </button>
              </form></p>
            </div>
            <div class="col-lg-12 comments-space comments-space{$post.postid}" style="display:none;">
              <div class="col-lg-12">
                <div class="col-lg-12 comment-information">
                  <div class="row commentsDisplay">
                    <div class="col-lg-12 comment-owner-description">
                        {foreach $post.comments as $comment}
                        <p><a href="../pages/showProfilePage.php?username={$comment.username}"> {$comment.username} </a> {$comment.description} </p>
                        {/foreach}
                        <div class ="new-comments">

                        </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-lg-12">
                <div class="row">
                  <div class="col-lg-12">
                    <p>
                    <form class="comment-form" action="#" method="post">
                      <input type="text" name="comment" class="comment-text" size="100" placeholder="Comment..."></textarea>
                      <input type="submit" value="Send" class="btn btn-info send-comment">
                    </form>
                    </p>
                  </div>
                </div>
              </div>
            </div>
          </div>

          {/foreach}
        </div>

        <div class="col-lg-3 col-md-3 col-sm-4 col-xs-4">
          <div class="row">
            <div class="col-lg-12 groups panel panel-default">
              <h2 style="text-align: center;" class="panel-heading"> <a href="../pages/showGroups.php"> My Groups </a> </h2>
              <div class="panel-content">
				{foreach $groups as $group}
				<div class="group-row">
					<h3><a href="../pages/showJoinedGroupPage.php?id={$group.communityid}"> {$group.name} </a></h3>
				 </div>
				 {/foreach}
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-lg-12 events panel panel-default">
              <h2 style="text-align: center;" class="panel-heading"> <a href="../pages/showEvents.php"> My Events </a> </h2>
              <div class="panel-content">
                {foreach $events as $event}
				<div class="event-row">
					<h3><a href="../pages/showJoinedEventPage.php?id={$event.eventid}"> {$event.name} </a></h3>
				 </div>
				 {/foreach}
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>


    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>

    <script src="../javascript/feedPost.js"></script>
    <script src="../javascript/likePost.js"></script>
    <script src="../javascript/commentsPost.js"></script>

    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="../bootstrap/js/bootstrap.min.js"></script>
  </body>
</html>
