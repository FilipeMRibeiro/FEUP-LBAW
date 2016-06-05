<?php

  include_once('../config/init.php');
  include_once($BASE_DIR .'database/users.php');

  $userID = current(getUserID($_SESSION['username']));
  $senderID = current(getUserID($_POST['senderUsername']));
  $chatID = $_POST['chatID'];

  $newDescription = 'The user '. '<span class="username">'.$_POST['senderUsername'].'</span> wants to add you as friend.
  <p style="color: red;"> Friend Request Declined </p>';

  $oldDescription = 'The user '. '<span class="username">'.$_POST['senderUsername'].'</span> wants to add you as friend.%';

  updateFriendRequest($newDescription, $chatID, $oldDescription);

?>
