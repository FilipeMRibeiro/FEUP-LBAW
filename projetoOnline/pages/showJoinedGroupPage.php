<?php

  include_once('../config/init.php');
  include_once($BASE_DIR .'database/users.php');
  
  $groupID = $_GET['id'];
  $posts = getGroupPosts($groupID);
  $groupInfo = getGroupInfo($groupID);

  $smarty->assign('groupID', $groupID);
  $smarty->assign('posts', $posts);
  $smarty->assign('groupInfo', $groupInfo);
  $smarty->display('users/joinedGroupPage.tpl');

?>
