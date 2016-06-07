<?php

  include_once('../config/init.php');
  include_once($BASE_DIR .'database/users.php');

  $userID = current(getUserID($_SESSION['username']));
  
  //
  if(createEvent($userID, $_POST['name'], $_POST['description'], $_POST['date'], $_POST['local'], $_POST['maxParticipants']))
  {
    header('Location: showEvents.php');
  }

?>