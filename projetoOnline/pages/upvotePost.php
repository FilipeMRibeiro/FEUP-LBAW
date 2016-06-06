<?php

  include_once('../config/init.php');
  include_once($BASE_DIR .'database/users.php');

  include 'expiredLogin.php';

  $userID = current(getUserID($_SESSION['username']));

  $posts = getUserPosts($userID);
  $userInfo = getUserInfo($_SESSION['username']);

  if(createUpvote($userID, $_POST['postid']))
  {
     echo getPostUpvotes($_POST['postid']);
  }


?>
