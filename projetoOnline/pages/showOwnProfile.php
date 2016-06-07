<?php

  include_once('../config/init.php');
  include_once($BASE_DIR .'database/users.php');

  include 'expiredLogin.php';

  $userID = current(getUserID($_SESSION['username']));

  $posts = getUserPosts($userID);
  $userInfo = getUserInfo($_SESSION['username']);
  $awards = getUserAwards($userID);

  $species = getSpecies();

  foreach ($species as &$speciesName)
  {
	$speciesName['race'] = getRaces($speciesName['name']);
  }

  $country = getCountry();

  foreach ($country as &$countryName)
  {
	$countryName['city'] = getCities($countryName['name']);
  }

  foreach ($posts as &$post)
  {
  	$post['upvotes'] = getPostUpvotes($post['postid']);
  	if(checkLikedPost($userID, $post['postid']))
  	  $post['liked'] = 1;
  	else {
  	  $post['liked'] = 0;
	   }
  }

  $smarty->assign('posts', $posts);
  $smarty->assign('userInfo', $userInfo);
  $smarty->assign('username', $_SESSION['username']);
  $smarty->assign('species', $species);
  $smarty->assign('country', $country);
  $smarty->assign('awards', $awards);
  $smarty->display('users/ownProfilePage.tpl');
