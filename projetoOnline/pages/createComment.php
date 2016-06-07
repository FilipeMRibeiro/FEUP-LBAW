<?php

  include_once('../config/init.php');
  include_once($BASE_DIR .'database/users.php');

  include 'expiredLogin.php';

  $userID = current(getUserID($_SESSION['username']));
  $description = $_POST['comment'];
  $postID = $_POST['postid'];

  createComment($userID, $postID, $description);

  $comment = getLastComment($postID);

  echo '<p><a href="../pages/showProfilePage.php?username=' . $comment['username'] . '"> '. $comment['username'] .' </a> ' . $comment['description'] . '</p>'

?>
