<?php

  include_once('../config/init.php');
  include_once($BASE_DIR .'database/users.php');

  include 'expiredLogin.php';

  $userID = current(getUserID($_SESSION['username']));

  $chats = getChats($userID);


  foreach ($chats as &$chat) {
    $chat['message'] = getLastMessage($chat['chatid']);
    $chat['username'] = current(getUsername($chat['message']['userid']));
    $chat['name'] = current(getChatName($chat['chatid']));
    $chat['name'] = str_replace($_SESSION['username'], "", $chat['name']);
    $chat['messages'] = getAllMessages($chat['chatid']);

    foreach($chat['messages'] as &$message)
    {
      $message['username'] =  current(getUsername($message['userid']));

    echo   '<span>' . '<span class="non-selected">'. $chat['chatid'] .'</span><div class="row message">
        <div class="col-lg-1 message-profile-picture">
          <img src="../images/defaultProfilePicture.png"/>
        </div>
        <div class="col-lg-10 message-content">
          <p class="profile-name">' . $message['username'] . '</p>
          <p> ' . $message['description'] . ' </p>
          <p style="color: grey;"> ' . $message['date']. ' </p>
        </div>
      </div></span>';

    }

  }


?>
