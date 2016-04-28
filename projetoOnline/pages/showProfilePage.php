<?php

  include_once('../config/init.php');
  include_once($BASE_DIR .'database/users.php');

  $userID = current(getUserID($_SESSION['username']));

  $posts = getUserPosts($userID);
  $userInfo = getUserInfo($_SESSION['username']);

  $smarty->assign('posts', $posts);
  $smarty->assign('userInfo', $userInfo);
  $smarty->assign('username', $_SESSION['username']);
  $smarty->display('users/profilePage.tpl');

?>
