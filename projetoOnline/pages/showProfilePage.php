<?php

  include_once('../config/init.php');
  include_once($BASE_DIR .'database/users.php');

  $userID = current(getUserID($_GET['username']));

  $posts = getUserPosts($userID);
  $userInfo = getUserInfo($_GET['username']);
  $awards = getUserAwards($userID);

  $smarty->assign('posts', $posts);
  $smarty->assign('userInfo', $userInfo);
  $smarty->assign('username', $_GET['username']);
  $smarty->assign('awards', $awards);
  $smarty->display('users/profilePage.tpl');

?>
