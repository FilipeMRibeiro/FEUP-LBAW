<?php

  include_once('../config/init.php');
  include_once($BASE_DIR .'database/users.php');

  $userID = current(getUserID($_SESSION['username']));
  $senderID = current(getUserID($_POST['senderUsername']));
  $chatID = $_POST['chatID'];

  $newDescription = 'The user '. '<span class="username">'.$_POST['senderUsername'].'</span> wants to add you as friend.
  <p style="color: green;"> Friend Request Accepted </p>';

  $oldDescription = 'The user '. '<span class="username">'.$_POST['senderUsername'].'</span> wants to add you as friend.%';

  acceptFriendRequest($senderID, $userID);
  updateFriendRequest($newDescription, $chatID, $oldDescription);

?>
