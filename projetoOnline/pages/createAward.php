<?php

  include_once('../config/init.php');
  include_once($BASE_DIR .'database/users.php');
    
  if(sizeof(getUserID($_SESSION['username'])) == '1')
  {
       createBadge($_POST['description']);
	  $badgeID = current(getLastBadgeID());
	  $userID = current(getUserID($_POST['username']));
	  updateParticipation($badgeID, $_POST['eventid'], $userID);
  }
?>