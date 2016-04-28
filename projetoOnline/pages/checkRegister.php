<?php

  include_once('../config/init.php');
  include_once($BASE_DIR .'database/users.php');

  //Race, Gender, City -> default
  if(createUser(1, 1, 1, $_POST['name'], $_POST['birthday'], $_POST['email'], $_POST['password'], $_POST['username']))
  {
    $_SESSION['username'] = $_POST['username'];
    header('Location: showProfilePage.php');
  }

?>
