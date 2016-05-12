<?php

  include_once('../config/init.php');
  include_once($BASE_DIR .'database/users.php');

  $userID = current(getUserID($_SESSION['username']));
  $receiverID = current(getUserID($_POST['receiverUsername']));

  $receiverUsername = $_POST['receiverUsername'];

  $nameOption1 = $_SESSION['username'].$receiverUsername;
  $nameOption2 = $receiverUsername.$_SESSION['username'];

  if(getChatID($nameOption1) == true)
  {
    $chatID = current(getChatID($nameOption1));
    $description = 'The user '. '<span class="username">'.$_SESSION['username'].'</span> wants to add you as friend.
    <button type="button" class="accept"> Accept </button>
    <button type="button" class="decline"> Decline </button>
    <span class="hidden chatID">'.$chatID.'</span>';
    sendMessage($chatID, $userID, $description);
    sendFriendRequest($userID, $receiverID);
  }
  else if(getChatID($nameOption2) == true) {
    $chatID = current(getChatID($nameOption2));
    $description = 'The user '. '<span class="username">'.$_SESSION['username'].'</span> wants to add you as friend.
    <button type="button" class="accept"> Accept </button>
    <button type="button" class="decline"> Decline </button>
    <span class="hidden chatID">'.$chatID.'</span>';
    sendMessage($chatID, $userID, $description);
    sendFriendRequest($userID, $receiverID);
  }
    else {
      if(createChat($nameOption1)) {
          $chatID = current(getChatID($nameOption1));
          createUserChat($userID, $chatID);
          createUserChat(current(getUserID($receiverUsername)), $chatID);
          $description = 'The user '. '<span class="username">'.$_SESSION['username'].'</span> wants to add you as friend.
          <button type="button" class="accept"> Accept </button>
          <button type="button" class="decline"> Decline </button>
          <span class="hidden chatID">'.$chatID.'</span>';
          sendMessage($chatID, $userID, $description);
          sendFriendRequest($userID, $receiverID);
      }
  }
?>
