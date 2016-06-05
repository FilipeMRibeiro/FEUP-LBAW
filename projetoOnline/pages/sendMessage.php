<?php

include_once('../config/init.php');
include_once($BASE_DIR .'database/users.php');

include 'expiredLogin.php';

$userID = current(getUserID($_SESSION['username']));
$receiverID = current(getUserID($_POST['receiverUsername']));

$receiverUsername = $_POST['receiverUsername'];
$description = $_POST['description'];

$nameOption1 = $_SESSION['username'].$receiverUsername;
$nameOption2 = $receiverUsername.$_SESSION['username'];

if(getChatID($nameOption1))
{
  $chatID = current(getChatID($nameOption1));
  sendMessage($chatID, $userID, $description);
}
else if(getChatID($nameOption2)) {
  $chatID = current(getChatID($nameOption2));
  sendMessage($chatID, $userID, $description);
}
  else {
    if(createChat($nameOption1)) {
        $chatID = current(getChatID($nameOption1));
        createUserChat($userID, $chatID);
        createUserChat(current(getUserID($receiverUsername)), $chatID);
        sendMessage($chatID, $userID, $description);
    }
}

?>
