<?php

include_once('../config/init.php');
include_once($BASE_DIR .'database/users.php');

include 'expiredLogin.php';

if(isset($_FILES['image'])){
      $errors= array();
      $file_name = $_FILES['image']['name'];
      $file_size =$_FILES['image']['size'];
      $file_tmp =$_FILES['image']['tmp_name'];
      $file_type=$_FILES['image']['type'];
      $file_ext=strtolower(end(explode('.',$_FILES['image']['name'])));

      $expensions= array("jpeg","jpg","png");

      if(in_array($file_ext,$expensions)=== false){
         $errors[]="extension not allowed, please choose a JPEG or PNG file.";
      }

      if(empty($errors)==true){
         move_uploaded_file($file_tmp,$BASE_DIR .'uploads/profile-picture/'.$_SESSION['username']);
         echo "Success";
      }else{
         print_r($errors);
      }
   }
?>
