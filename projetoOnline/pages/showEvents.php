<?php

include_once('../config/init.php');
include_once($BASE_DIR .'database/users.php');

$userID = current(getUserID($_SESSION['username']));
$createdEvents = getCreatedEvents($userID);
$joinedEvents = getJoinedEvents($userID);

$smarty->assign('createdEvents', $createdEvents);
$smarty->assign('joinedEvents', $joinedEvents);
$smarty->display('users/showEvents.tpl');

?>
