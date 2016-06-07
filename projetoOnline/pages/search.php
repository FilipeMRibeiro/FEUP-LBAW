<?php

  include_once('../config/init.php');
  include_once($BASE_DIR .'database/users.php');

  include 'expiredLogin.php';

  $userID = current(getUserID($_SESSION['username']));
  $search = $_POST['search-input'];

  $searchUsers = searchUsers($search);

  echo current($searchUsers);

  $searchEvents = searchEvents($search);

  echo current($searchEvents);

  $searchGroups = searchGroups($search);

  echo current($searchGroups);

  echo 'cenas';

?>
