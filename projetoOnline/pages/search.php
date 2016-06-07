<?php

  include_once('../config/init.php');
  include_once($BASE_DIR .'database/users.php');

  include 'expiredLogin.php';

  $userID = current(getUserID($_SESSION['username']));
  $search = $_POST['search-input'];

  $searchUsers = searchUsers($search);

  foreach($searchUsers as &$user)
  {
    $user['username'] = current(getUsername($user['userid']));
  }

  $searchEvents = searchEvents($search);

  foreach($searchEvents as &$event)
  {
    $event['name'] = current(getEventName($event['eventid']));
    $event['description'] = current(getEventDescription($event['eventid']));
  }

  $searchGroups = searchGroups($search);

  foreach($searchGroups as &$group)
  {
    $group['name'] = current(getGroupName($group['communityid']));
    $group['description'] = current(getGroupDescription($group['communityid']));
  }

  $smarty->assign('users', $searchUsers);
  $smarty->assign('events', $searchEvents);
  $smarty->assign('groups', $searchGroups);
  $smarty->display('users/search.tpl');

?>
