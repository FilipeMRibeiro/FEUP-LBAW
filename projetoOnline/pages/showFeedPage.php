<?php

  include_once('../config/init.php');
  include_once($BASE_DIR .'database/users.php');

  include 'expiredLogin.php';

  $userID = current(getUserID($_SESSION['username']));

  $posts = getFeedPosts($userID);

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
  $smarty->assign('username', $_SESSION['username']);
  $smarty->display('users/feedPage.tpl');

?>
