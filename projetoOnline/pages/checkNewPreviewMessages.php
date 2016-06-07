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

      echo '<div chat-box'.$chat['chatid'].'">
        <div class="row message-box">
          <div class="col-lg-3 vcenter profile-picture">
          </div>
          <div class="col-lg-8 vcenter last-message">
            <p class="profile-name">' . $chat['name'] .'</p>
            <p>'. $chat['message']['description'] . '</p>
          </div>
        </div>
      </div>' ;
  }



?>
