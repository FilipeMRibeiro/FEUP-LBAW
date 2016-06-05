<?php

include_once('../config/init.php');
include_once($BASE_DIR .'database/users.php');

include 'expiredLogin.php';

$userID = current(getUserID($_SESSION['username']));

$friends = getFriends($userID);

foreach ($friends as &$friend) {
  $friend['username'] = current(getUsername($friend['userid']));
}

$smarty->assign('friends', $friends);
$smarty->display('users/friendList.tpl');

?>
