<?php

  include_once('../config/init.php');
  include_once($BASE_DIR .'database/users.php');

  $userID = current(getUserID($_SESSION['username']));

  $posts = getFeedPosts($userID);
  $groups = getCommunitiesExamples($userID);
  $events = getEventsExamples($userID);

  $smarty->assign('posts', $posts);
  $smarty->assign('username', $_SESSION['username']);
  $smarty->assign('groups', $groups);
  $smarty->assign('events', $events);
  $smarty->display('users/feedPage.tpl');

?>
