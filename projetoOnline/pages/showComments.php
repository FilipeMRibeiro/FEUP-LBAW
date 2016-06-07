<?php

  include_once('../config/init.php');
  include_once($BASE_DIR .'database/users.php');

  include 'expiredLogin.php';

  $userID = current(getUserID($_SESSION['username']));
  $postID = $_POST['postid'];

  $posts = getUserPosts($userID);
  $userInfo = getUserInfo($_SESSION['username']);

  $comments = getComments($postID);
  foreach ($comments as $comment) {
    echo $comment['description'];
  }

?>
