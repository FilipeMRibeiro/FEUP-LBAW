<?php /* Smarty version Smarty-3.1.15, created on 2016-06-03 10:27:33
         compiled from "/usr/users2/mieic2011/ei11141/public_html/LBAW/frmk/templates/users/joinedEventPage.tpl" */ ?>
<?php /*%%SmartyHeaderCode:21377112275750a56d13bfe0-88421331%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '47023b692ed7ecb11746c93d66406dd5ebb0da5c' => 
    array (
      0 => '/usr/users2/mieic2011/ei11141/public_html/LBAW/frmk/templates/users/joinedEventPage.tpl',
      1 => 1464946043,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '21377112275750a56d13bfe0-88421331',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_5750a56d268a76_64875295',
  'variables' => 
  array (
    'eventInfo' => 0,
    'eventID' => 0,
    'posts' => 0,
    'post' => 0,
    'awards' => 0,
    'award' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5750a56d268a76_64875295')) {function content_5750a56d268a76_64875295($_smarty_tpl) {?><!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.5 -->
    <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">

    <link rel="stylesheet" href="../css/event_page.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">

    <link href='https://fonts.googleapis.com/css?family=Roboto:500' rel='stylesheet' type='text/css'>

    <title>Pawz - <?php echo $_smarty_tpl->tpl_vars['eventInfo']->value['name'];?>
</title>
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
              <p><span class="event-name"> <?php echo $_smarty_tpl->tpl_vars['eventInfo']->value['name'];?>
 </span> </p>
              <p><i class="fa fa-paw fa-lg"> <?php echo $_smarty_tpl->tpl_vars['eventInfo']->value['description'];?>
 </i></p>
			  <p><i class="fa fa-birthday-cake fa-lg"> <?php echo $_smarty_tpl->tpl_vars['eventInfo']->value['date'];?>
 </i></p>
			  <p><i class="fa fa-map-marker fa-lg"> <?php echo $_smarty_tpl->tpl_vars['eventInfo']->value['local'];?>
 </i></p>
             <p><i class="fa fa-user fa-lg"> Creator: <a href="../pages/showProfilePage.php?username=<?php echo $_smarty_tpl->tpl_vars['eventInfo']->value['username'];?>
"> <?php echo $_smarty_tpl->tpl_vars['eventInfo']->value['username'];?>
 </a></i></p>
            </div>
          </div>
        </div>
        <div class="col-lg-5 col-lg-offset-1 col-xs-12 feed-space">
          <div class="row">
            <div class="col-lg-12 post-bar panel panel-default">
              <form method="POST" class="submitPost" action="#" role="form">
                <div class="col-lg-10 share">
                  <input type="text" name="description" required class="form-control" placeholder="Share Something...">
				  <input type="hidden" name="eventid" required value=<?php echo $_smarty_tpl->tpl_vars['eventID']->value;?>
>
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
                  <h3><a href="showProfilePage.php?username=<?php echo $_smarty_tpl->tpl_vars['post']->value['username'];?>
"> <?php echo $_smarty_tpl->tpl_vars['post']->value['username'];?>
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
        <div class="col-lg-3 col-lg-offset-1 awards-column">
          <div class="row">
            <div class="col-lg-12 awards panel panel-default">
              <h2 class="panel-heading"> Awards </h2>
              <div class="panel-body">
				<?php  $_smarty_tpl->tpl_vars['award'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['award']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['awards']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['award']->key => $_smarty_tpl->tpl_vars['award']->value) {
$_smarty_tpl->tpl_vars['award']->_loop = true;
?>
				<div class="award-row">
					<img src="../images/award.png" alt="Award"/>
					<h3> <?php echo $_smarty_tpl->tpl_vars['award']->value['description'];?>
 </h3>
					<h3> Winner: <a href="showProfilePage.php?username=<?php echo $_smarty_tpl->tpl_vars['award']->value['username'];?>
"> <?php echo $_smarty_tpl->tpl_vars['award']->value['username'];?>
 </a></h3>
				</div>
				<?php } ?>
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

    <script src="../javascript/eventPost.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="../bootstrap/js/bootstrap.min.js"></script>
  </body>
</html>
<?php }} ?>
