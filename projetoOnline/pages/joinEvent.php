<?php
  include_once('../config/init.php');
  include_once($BASE_DIR .'database/users.php');
  
  if(sizeof(getUserID($_SESSION['username'])) == '1')
  {
    $userID = current(getUserID($_SESSION['username']));
	  if(sizeof(hasjoinedevent($userID, $_POST['eventid'])) == 0)
	  {
		  joinEvent($userID, $_POST['eventid']);
		  echo ("Joined Event!");
	  }
	  else{
		  echo ("Couldn't join.");
	  }
  }
?>