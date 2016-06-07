<?php

include_once('../config/init.php');
include_once($BASE_DIR .'database/users.php');

$userID = current(getUserID($_SESSION['username']));
$createdCommunities = getCreatedCommunities($userID);
$joinedCommunities = getJoinedCommunities($userID);

$smarty->assign('createdCommunities', $createdCommunities);
$smarty->assign('joinedCommunities', $joinedCommunities);
$smarty->display('users/showGroups.tpl');

?>
