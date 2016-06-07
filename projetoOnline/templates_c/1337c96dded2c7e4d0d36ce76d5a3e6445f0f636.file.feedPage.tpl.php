<?php /* Smarty version Smarty-3.1.15, created on 2016-06-07 00:19:07
         compiled from "/usr/users2/mieic2011/ei11141/public_html/LBAW/frmk/templates/users/feedPage.tpl" */ ?>
<?php /*%%SmartyHeaderCode:667508423573ed7e50337c6-30831625%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1337c96dded2c7e4d0d36ce76d5a3e6445f0f636' => 
    array (
      0 => '/usr/users2/mieic2011/ei11141/public_html/LBAW/frmk/templates/users/feedPage.tpl',
      1 => 1465255143,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '667508423573ed7e50337c6-30831625',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_573ed7e5177171_83298756',
  'variables' => 
  array (
    'posts' => 0,
    'post' => 0,
    'groups' => 0,
    'group' => 0,
    'events' => 0,
    'event' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_573ed7e5177171_83298756')) {function content_573ed7e5177171_83298756($_smarty_tpl) {?><!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.5 -->
    <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">

    <link rel="stylesheet" href="../css/feed_page.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">

    <link href='https://fonts.googleapis.com/css?family=Roboto:500' rel='stylesheet' type='text/css'>

    <title>Pawz</title>
  </head>
  <body>
  <?php echo $_smarty_tpl->getSubTemplate ('common/headerAndNav.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

    <div class="container-fluid main">
      <div class="row">
        <div class="col-lg-9 col-xs-12 feed-space">
          <div class="row">
            <div class="col-lg-12 post-bar panel panel-default">
              <form action="#" class="submitPost" method="POST" role="form">
                <div class="col-lg-2 picture-share-something">
                  <img class="img" src="../images/defaultProfilePicture.png" alt="Profile Picture"/>
                </div>
                <div class="col-lg-8 share">
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
            <div class="col-lg-2 post-profile-picture">
              <img class="img" src="../images/defaultProfilePicture.png" alt="Profile Picture"/>
            </div>
            <div class="col-lg-10 post-information">
              <div class="row">
                <div class="col-lg-12 post-owner-description">
                  <h3><a href="../pages/showProfilePage.php?username=<?php echo $_smarty_tpl->tpl_vars['post']->value['username'];?>
"> <?php echo $_smarty_tpl->tpl_vars['post']->value['username'];?>
 </a> </h3>
                  <p> <?php echo $_smarty_tpl->tpl_vars['post']->value['description'];?>
. </p>
                  <p style="color: grey;"> <?php echo $_smarty_tpl->tpl_vars['post']->value['date'];?>
  </p>
                  <div id="pointer"></div>
                </div>
              </div>
              <!--
              <div class="row">
                <div class="col-lg-8 post-image">
                  <img class="img" src="../images/sloth-chilling.jpg" style="width: 90%;" alt="Image Posted"/>
                </div>
              </div>
              <div class="row">
                <div class="col-lg-12 post-comments-likes">
                  <p> <i class="fa fa-thumbs-up"></i> 2 <i class="fa fa-comment"></i> 0 </p>
                </div>
              </div>
            -->
            </div>
          </div>

          <?php } ?>

        </div>
        <div class="col-lg-3 col-md-3 col-sm-4 col-xs-4">
          <div class="row">
            <div class="col-lg-12 groups panel panel-default">
              <h2 style="text-align: center;" class="panel-heading"> <a href="../pages/showGroups.php"> My Groups </a> </h2>
              <div class="panel-content">
				<?php  $_smarty_tpl->tpl_vars['group'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['group']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['groups']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['group']->key => $_smarty_tpl->tpl_vars['group']->value) {
$_smarty_tpl->tpl_vars['group']->_loop = true;
?>
				<div class="group-row">
					<img class="img" src="../images/german_shepherd_group.JPG" style="width: 100%;"/>
					<h3><a href="../pages/showJoinedGroupPage.php?id=<?php echo $_smarty_tpl->tpl_vars['group']->value['communityid'];?>
"> <?php echo $_smarty_tpl->tpl_vars['group']->value['name'];?>
 </a></h3>
				 </div>
				 <?php } ?>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-lg-12 events panel panel-default">
              <h2 style="text-align: center;" class="panel-heading"> <a href="../pages/showEvents.php"> My Events </a> </h2>
              <div class="panel-content">
                <?php  $_smarty_tpl->tpl_vars['event'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['event']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['events']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['event']->key => $_smarty_tpl->tpl_vars['event']->value) {
$_smarty_tpl->tpl_vars['event']->_loop = true;
?>
				<div class="event-row">
					<img class="img" src="../images/german_shepherd_group.JPG" style="width: 100%;"/>
					<h3><a href="../pages/showJoinedEventPage.php?id=<?php echo $_smarty_tpl->tpl_vars['event']->value['eventid'];?>
"> <?php echo $_smarty_tpl->tpl_vars['event']->value['name'];?>
 </a></h3>
				 </div>
				 <?php } ?>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>


    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>

    <script src="../javascript/feedPost.js"></script>

    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="../bootstrap/js/bootstrap.min.js"></script>
  </body>
</html>
<?php }} ?>
