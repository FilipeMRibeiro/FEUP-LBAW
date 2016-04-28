<?php

  include_once('../config/init.php');
  include_once($BASE_DIR .'database/users.php');

  if(checkLogin($_POST['username'], $_POST['password']) == true)
  {
    $_SESSION['username'] = $_POST['username'];
    header('Location: showProfilePage.php');
  }

?>
