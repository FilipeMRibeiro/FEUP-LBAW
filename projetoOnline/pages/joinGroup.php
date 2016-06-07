<?php
  include_once('../config/init.php');
  include_once($BASE_DIR .'database/users.php');
  
  if(sizeof(getUserID($_SESSION['username'])) == '1')
  {
    $userID = current(getUserID($_SESSION['username']));
	  if(sizeof(hasjoined($userID, $_POST['communityid'])) == 0)
	  {
		  joinGroup($userID, $_POST['communityid']);
		  echo ("Joined Group!");
	  }
	  else{
		  echo ("Couldn't join.");
	  }
  }
?>