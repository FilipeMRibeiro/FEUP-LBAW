<?php

  include_once('../config/init.php');
  include_once($BASE_DIR .'database/users.php');

  include 'expiredLogin.php';

  $userID = current(getUserID($_SESSION['username']));
  $userInfo = getUserDetails($_SESSION['username']);

  $genderID;
  if(isset($_POST['gender'])) {
	  if ($_POST['gender'] == 'Male' ) {
	  	$genderID = 1;
	  }
	  else if ($_POST['gender'] == 'Female' ) {
	  	$genderID = 2;
	  }
	  else if ($_POST['gender'] == 'Other' ) {
	  	$genderID = 3;
	  }
  }
  else {
  	$genderID = $userInfo['genderid'];
  }

  $birthday = $_POST['birthday'];

   if(isset($_POST['email'])){
    $email = $_POST['email'];
  }
  else{
    $email = $userInfo['email'];
  }


  if(isset($_POST['raceID'])){
    $raceID = $_POST['raceID'];
  }
  else{
    $raceID = $userInfo['raceid'];
  }

  if(isset($_POST['cityID'])){
    $cityID = $_POST['cityID'];
  }
  else{
    $cityID = $userInfo['cityid'];
  }

  updateInfo($userID, $genderID, $birthday, $email, $raceID, $cityID);

?>