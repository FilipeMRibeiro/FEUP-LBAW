<?php

  include_once('../config/init.php');
  include_once($BASE_DIR .'database/users.php');

  include 'expiredLogin.php';

  $userID = current(getUserID($_SESSION['username']));

  $posts = getFeedPosts($userID);

  $smarty->assign('posts', $posts);
  $smarty->assign('username', $_SESSION['username']);
  $smarty->display('users/feedPage.tpl');

?>
