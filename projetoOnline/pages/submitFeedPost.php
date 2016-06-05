<?php

  include_once('../config/init.php');
  include_once($BASE_DIR .'database/users.php');

  if(sizeof(getUserID($_SESSION['username'])) == '1')
  {
    $userID = current(getUserID($_SESSION['username']));
    createPost($userID, $_POST['description'], '1');

    $lastPost = getLastPost($userID);
    echo '
      <div class="row post-row">
        <div class="col-lg-2 post-profile-picture">
          <img class="img" src="../images/defaultProfilePicture.png" alt="Profile Picture"/>
        </div>
        <div class="col-lg-10 post-information">
          <div class="row">
            <div class="col-lg-12 post-owner-description">
              <h3><a href="showProfilePage.php?username='  .$lastPost['username']. '">'. $lastPost['username'] . '</a></h3>
              <p> '. $lastPost['description'] .' </p>
              <p style="color: grey;"> ' . $lastPost['date'] .'  </p>
              <div id="pointer"></div>
            </div>
          </div>
        </div>
      </div> ' ;
  }
?>
