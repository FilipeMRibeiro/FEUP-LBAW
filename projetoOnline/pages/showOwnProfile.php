<?php

  include_once('../config/init.php');
  include_once($BASE_DIR .'database/users.php');

  include 'expiredLogin.php';

  $userID = current(getUserID($_SESSION['username']));

  $posts = getUserPosts($userID);
  $userInfo = getUserInfo($_SESSION['username']);

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

  $smarty->assign('posts', $posts);
  $smarty->assign('userInfo', $userInfo);
  $smarty->assign('username', $_SESSION['username']);
  $smarty->assign('species', $species);
  $smarty->assign('country', $country);
              
  $smarty->display('users/ownProfilePage.tpl');

?>
