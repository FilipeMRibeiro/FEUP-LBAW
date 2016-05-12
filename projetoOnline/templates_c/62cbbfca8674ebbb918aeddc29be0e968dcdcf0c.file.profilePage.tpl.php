<?php /* Smarty version Smarty-3.1.15, created on 2016-05-13 00:28:00
         compiled from "/opt/lbaw/lbaw1552/public_html/frmk/templates/users/profilePage.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1193107249572264e0215cc1-95279950%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '62cbbfca8674ebbb918aeddc29be0e968dcdcf0c' => 
    array (
      0 => '/opt/lbaw/lbaw1552/public_html/frmk/templates/users/profilePage.tpl',
      1 => 1463092075,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1193107249572264e0215cc1-95279950',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_572264e02af019_52188160',
  'variables' => 
  array (
    'userInfo' => 0,
    'username' => 0,
    'posts' => 0,
    'post' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_572264e02af019_52188160')) {function content_572264e02af019_52188160($_smarty_tpl) {?><!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.5 -->
    <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">

    <link rel="stylesheet" href="../css/profile_page.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">

    <link href='https://fonts.googleapis.com/css?family=Roboto:500' rel='stylesheet' type='text/css'>

    <title>Pawz</title>
  </head>
  <?php echo $_smarty_tpl->getSubTemplate ('common/headerAndNav.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

    <div class="container-fluid main">
      <div class="row">
        <div class="col-lg-2 col-md-3 col-sm-4 col-xs-4 profile-information-space">
          <div class="row">
            <div class="col-lg-12 profile-image">
              <img src="../images/defaultProfilePicture.png" alt="Profile Picture"/>
            </div>
          </div>
          <div class="row">
            <div class="col-lg-12 profile-information panel panel-default">
              <p><span class="profile-name"> <?php echo $_smarty_tpl->tpl_vars['userInfo']->value['user_name'];?>
 </span> </p>
              <p><i class="fa fa-mars fa-lg"> <?php echo $_smarty_tpl->tpl_vars['userInfo']->value['gender_name'];?>
 </i></p>
              <p><i class="fa fa-birthday-cake fa-lg"> <?php echo $_smarty_tpl->tpl_vars['userInfo']->value['birthday'];?>
 </i></p>
              <p><i class="fa fa-paw fa-lg"> <?php echo $_smarty_tpl->tpl_vars['userInfo']->value['species_name'];?>
 </i></p>
              <p><i class="fa fa-paw fa-lg"> <?php echo $_smarty_tpl->tpl_vars['userInfo']->value['race_name'];?>
 </i></p>
              <p><i class="fa fa-map-marker fa-lg"> <?php echo $_smarty_tpl->tpl_vars['userInfo']->value['city_name'];?>
, <?php echo $_smarty_tpl->tpl_vars['userInfo']->value['country_name'];?>
 </i></p>
              <p><i class="fa fa-user fa-lg"><a class="addFriend" href=""> <span class="receiverUsername"><?php echo $_smarty_tpl->tpl_vars['username']->value;?>
</span> Add friend </a></i></p>
              <p><i class="fa fa-envelope fa-lg"> Send Message </i></p>
            </div>
          </div>
        </div>
        <div class="col-lg-5 col-lg-offset-1 col-xs-12 feed-space">
          <div class="row">
            <div class="col-lg-12 post-bar panel panel-default">
              <form method="POST" class="submitPost" action="#" role="form">
                <div class="col-lg-10 share">
                  <input type="text" name="description" required class="form-control" placeholder="Share Something...">
                </div>
                <div class="col-lg-2 share-button">
                  <button type="submit" id="submitButton" class="btn btn-info"> Share </button>
                </div>
              </form>
            </div>
          </div>

          <div class="recentlyCreatedPostSpace"></div>
          <?php  $_smarty_tpl->tpl_vars['post'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['post']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['posts']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['post']->key => $_smarty_tpl->tpl_vars['post']->value) {
$_smarty_tpl->tpl_vars['post']->_loop = true;
?>

          <div class="row post-row">
            <div class="col-lg-3 post-profile-picture">
              <img class="img" src="../images/defaultProfilePicture.png" alt="Profile Picture"/>
            </div>
            <div class="col-lg-9 post-information">
              <div class="row">
                <div class="col-lg-12 post-owner-description">
                  <h3><a href="showProfilePage.php?username=<?php echo $_smarty_tpl->tpl_vars['username']->value;?>
"> <?php echo $_smarty_tpl->tpl_vars['username']->value;?>
 </a></h3>
                  <p> <?php echo $_smarty_tpl->tpl_vars['post']->value['description'];?>
 </p>
                  <p style="color: grey;"> <?php echo $_smarty_tpl->tpl_vars['post']->value['date'];?>
  </p>
                  <div id="pointer"></div>
                </div>
              </div>
              <!--
              <div class="row">
                <div class="col-lg-12 post-image">
                  <img class="img" src="../images/rex_and_bae.png" style="width: 90%;" alt="Image Posted"/>
                </div>
              </div>
              <div class="row">
                <div class="col-lg-12 post-comments-likes">
                  <p> <i class="fa fa-thumbs-up"></i> 10 <i class="fa fa-comment"></i> 4 </p>
                </div>
              </div>
            -->
            </div>
          </div>

          <?php } ?>

        </div>
        <div class="col-lg-3 col-lg-offset-1 activities-awards-column">
          <div class="row">
            <div class="col-lg-12 activities panel panel-default">
              <h2 class="panel-heading">Recent Activities</h2>
              <ul class="panel-content">
                <li>  Running </li>
                <li> Hunting </li>
              </ul>
            </div>
          </div>
          <div class="row">
            <div class="col-lg-12 awards panel panel-default">
              <h2 class="panel-heading">Awards(3)</h2>
              <div class="panel-body">
                <img src="../images/award.png" style="width: 30%" alt="Award"/>
                <img src="../images/award.png" style="width: 30%" alt="Award"/>
                <img src="../images/award.png" style="width: 30%" alt="Award"/>
                <p></p>
                <a href=#>See all</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>


    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>

    <script src="../javascript/profilePost.js"></script>
    <script src="../javascript/addFriend.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="../bootstrap/js/bootstrap.min.js"></script>
  </body>
</html>
<?php }} ?>
