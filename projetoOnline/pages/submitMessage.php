<?php

  include_once('../config/init.php');
  include_once($BASE_DIR .'database/users.php');

  if(sizeof(getUserID($_SESSION['username'])) == '1')
  {
    $userID = current(getUserID($_SESSION['username']));
    sendMessage($_POST['chatid'], $userID, $_POST['description']);
    $lastMessage = getLastMessage($_POST['chatid']);
    $senderUsername = current(getUsername($lastMessage['userid']));

    echo '<div class="row message">
      <div class="col-lg-1 message-profile-picture">
        <img src="../images/defaultProfilePicture.png"/>
      </div>
      <div class="col-lg-10 message-content">
        <p class="profile-name">' . $senderUsername . '</p>
        <p> ' . $lastMessage['description'] . ' </p>
        <p style="color: grey;"> ' . $lastMessage['date'] . '</p>
      </div>
    </div>' ;
}

?>
