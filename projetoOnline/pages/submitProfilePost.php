<?php

  include_once('../config/init.php');
  include_once($BASE_DIR .'database/users.php');

  if(sizeof(getUserID($_SESSION['username'])) == '1')
  {
    $userID = current(getUserID($_SESSION['username']));
    createPost($userID, $_POST['description'], '1');

    $lastPost = getLastPost($userID);

    if(isset($_FILES['image'])){
          $errors= array();
          $file_name = $_FILES['image']['name'];
          $file_size =$_FILES['image']['size'];
          $file_tmp =$_FILES['image']['tmp_name'];
          $file_type=$_FILES['image']['type'];
          $file_ext=strtolower(end(explode('.',$_FILES['image']['name'])));

          $expensions= array("jpeg","jpg","png");

          /*if(in_array($file_ext,$expensions)=== false){
             $errors[]="extension not allowed, please choose a JPEG or PNG file.";
          }*/

          if(empty($errors)==true){
             move_uploaded_file($file_tmp,$BASE_DIR .'uploads/post-picture/'.$lastPost['postid']);
          }else{
             print_r($errors);
          }
       }

    echo '
      <div class="row post-row">
        <div class="col-lg-3 post-profile-picture">
          <img class="img" src="../uploads/profile-picture/'.$_SESSION['username'].'" onerror="this.src=\'../images/defaultProfilePicture.png\'" alt="Profile Picture"/>
        </div>
        <div class="col-lg-9 post-information">
          <div class="row">
            <div class="col-lg-12 post-owner-description">
              <h3><a href="showProfilePage.php?username='  .$lastPost['username']. '">'. $lastPost['username'] . '</a></h3>
              <p> '. $lastPost['description'] .' </p>
              <img style="height:40%; width:60%;" onerror="this.style.display=\'none\';" src="../uploads/post-picture/'.$lastPost['postid'].'">
              <p style="color: grey;"> ' . $lastPost['date'] .'  </p>
              <div id="pointer"></div>
            </div>
          </div>
        </div>
      </div> ' ;
  }
?>
