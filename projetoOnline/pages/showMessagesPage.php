<?php

  include_once('../config/init.php');
  include_once($BASE_DIR .'database/users.php');

  include 'expiredLogin.php';

  $userID = current(getUserID($_SESSION['username']));

  $chats = getChats($userID);

  foreach ($chats as &$chat) {
    $chat['message'] = getLastMessage($chat['chatid']);
    $chat['username'] = current(getUsername($chat['message']['userid']));
  }

  $smarty->assign('username', $_SESSION['username']);
  $smarty->assign('chats', $chats);
  $smarty->display('users/messagesPage.tpl');

?>
