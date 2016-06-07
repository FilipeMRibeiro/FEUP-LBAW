<?php

  include_once('../config/init.php');
  include_once($BASE_DIR .'database/users.php');

  $userID = current(getUserID($_SESSION['username']));
  
  //
  if(createGroup($userID, $_POST['name'], $_POST['description']))
  {
    header('Location: showGroups.php');
  }

?>