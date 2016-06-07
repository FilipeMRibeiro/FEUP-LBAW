<?php

  include_once('../config/init.php');
  include_once($BASE_DIR .'database/users.php');

  $userID = current(getUserID($_SESSION['username']));

  $posts = getUserPosts($userID);
  $userInfo = getUserInfo($_SESSION['username']);
  $awards = getUserAwards($userID);

  $smarty->assign('posts', $posts);
  $smarty->assign('userInfo', $userInfo);
  $smarty->assign('awards', $awards);
  $smarty->assign('username', $_SESSION['username']);
  $smarty->display('users/ownProfilePage.tpl');

?>
