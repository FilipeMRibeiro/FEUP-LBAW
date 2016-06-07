<?php

  include_once('../config/init.php');
  include_once($BASE_DIR .'database/users.php');

  include 'expiredLogin.php';

  $userID = current(getUserID($_GET['username']));

  $userIDSession = current(getUserID($_SESSION['username']));

  $posts = getUserPosts($userID);
  $userInfo = getUserInfo($_GET['username']);
  $awards = getUserAwards($userID);

  foreach ($posts as &$post)
  {
    $post['upvotes'] = getPostUpvotes($post['postid']);
    if(checkLikedPost($userIDSession, $post['postid']))
      $post['liked'] = 1;
    else {
      $post['liked'] = 0;
      $post['comments'] = getComments($post['postid']);
      $post['numberOfComments'] = getNumberOfComments($post['postid']);
    }
  }

  $smarty->assign('posts', $posts);
  $smarty->assign('userInfo', $userInfo);
  $smarty->assign('username', $_GET['username']);
  $smarty->assign('awards', $awards);
  $smarty->display('users/profilePage.tpl');

?>
