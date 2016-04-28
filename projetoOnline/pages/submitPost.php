<?php

  include_once('../config/init.php');
  include_once($BASE_DIR .'database/users.php');

  if(sizeof(getUserID($_SESSION['username'])) == '1')
  {
    $userID = current(getUserID($_SESSION['username']));
    createPost($userID, $_POST['description'], '1');
    header('Location: showProfilePage.php');
  }




?>
