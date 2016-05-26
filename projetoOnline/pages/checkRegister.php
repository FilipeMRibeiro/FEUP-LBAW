<?php

  include_once('../config/init.php');
  include_once($BASE_DIR .'database/users.php');

  //Race, Gender, City -> default
  if(createUser(1, 1, 1, $_POST['name'], $_POST['birthday'], $_POST['email'], $_POST['password'], $_POST['username']))
  {
    $_SESSION['username'] = $_POST['username'];

    $subject = "Pawz Registration";
    $message = "Thank you for registering in our website Pawz. \r\n
                Below there are your login credentials in case you forget them. \r\n
                \t  Username: " . $_POST['username'] . " \r\n
                \t  Password: " . $_POST['password'] . " \r\n";

    mail($_POST['email'], $subject, $message);

    header('Location: showFeedPage.php');
  }

?>
