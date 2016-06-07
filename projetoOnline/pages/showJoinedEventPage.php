<?php

  include_once('../config/init.php');
  include_once($BASE_DIR .'database/users.php');
  
  $eventID = $_GET['id'];
  $posts = getEventPosts($eventID);
  $eventInfo = getEventInfo($eventID);
  $awards = getEventAwards($eventID);

  $smarty->assign('eventID', $eventID);
  $smarty->assign('posts', $posts);
  $smarty->assign('eventInfo', $eventInfo);
  $smarty->assign('awards', $awards);
  $smarty->display('users/joinedEventPage.tpl');
?>
