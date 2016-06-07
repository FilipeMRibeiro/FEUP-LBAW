<?php /* Smarty version Smarty-3.1.15, created on 2016-06-07 13:42:53
         compiled from "/usr/users2/mieic2013/up201303832/public_html/projetoOnline/templates/users/search.tpl" */ ?>
<?php /*%%SmartyHeaderCode:12553887555756ac68b7cb29-74388422%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f56030ba0a023db4a1f5ba82c9a3712d30897a58' => 
    array (
      0 => '/usr/users2/mieic2013/up201303832/public_html/projetoOnline/templates/users/search.tpl',
      1 => 1465299771,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '12553887555756ac68b7cb29-74388422',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_5756ac68cecc39_73423157',
  'variables' => 
  array (
    'users' => 0,
    'user' => 0,
    'events' => 0,
    'event' => 0,
    'groups' => 0,
    'group' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5756ac68cecc39_73423157')) {function content_5756ac68cecc39_73423157($_smarty_tpl) {?><!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.5 -->
    <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">

    <link rel="stylesheet" href="../css/friend_list.css">
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
        <div class="col-lg-12 panel panel-default">
          <h2 class="panel-heading"> Users </h2>
          <div class="row">
            <div class="col-lg-12 panel-content">
              <div class="row">
                <?php  $_smarty_tpl->tpl_vars['user'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['user']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['users']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['user']->key => $_smarty_tpl->tpl_vars['user']->value) {
$_smarty_tpl->tpl_vars['user']->_loop = true;
?>
                <div class="col-lg-3">
                  <div class="col-lg-5 vcenter">
                    <img src="../uploads/profile-picture/<?php echo $_smarty_tpl->tpl_vars['user']->value['username'];?>
" style="height:100px; width:100px;" onerror="this.src='../images/defaultProfilePicture.png'" alt="Profile Picture"/>
                  </div>
                  <div class="col-lg-6 vcenter">
                    <p><a href="showProfilePage.php?username=<?php echo $_smarty_tpl->tpl_vars['user']->value['username'];?>
"> <?php echo $_smarty_tpl->tpl_vars['user']->value['username'];?>
 </p>
                  </div>
                </div>
                <?php } ?>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-12 panel panel-default">
          <h2 class="panel-heading"> Events </h2>
          <div class="row">
            <div class="col-lg-12 panel-content">
              <div class="row">
                <?php  $_smarty_tpl->tpl_vars['event'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['event']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['events']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['event']->key => $_smarty_tpl->tpl_vars['event']->value) {
$_smarty_tpl->tpl_vars['event']->_loop = true;
?>
                <div class="col-lg-3 vcenter">
                  <p><a href="showEventPage.php?id=<?php echo $_smarty_tpl->tpl_vars['event']->value['eventid'];?>
"> <?php echo $_smarty_tpl->tpl_vars['event']->value['name'];?>
 </a></p>
                  <p> <?php echo $_smarty_tpl->tpl_vars['event']->value['description'];?>
 </p>
                </div>
                <?php } ?>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-12 panel panel-default">
          <h2 class="panel-heading"> Groups </h2>
          <div class="row">
            <div class="col-lg-12 panel-content">
              <div class="row">
                <?php  $_smarty_tpl->tpl_vars['group'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['group']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['groups']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['group']->key => $_smarty_tpl->tpl_vars['group']->value) {
$_smarty_tpl->tpl_vars['group']->_loop = true;
?>
                <div class="col-lg-3 vcenter">
                  <p><a href="showGroupPage.php?id=<?php echo $_smarty_tpl->tpl_vars['group']->value['communityid'];?>
"> <?php echo $_smarty_tpl->tpl_vars['group']->value['name'];?>
 </a></p>
                  <p> <?php echo $_smarty_tpl->tpl_vars['group']->value['description'];?>
 </p>
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

    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="../bootstrap/js/bootstrap.min.js"></script>
  </body>
</html>
<?php }} ?>
