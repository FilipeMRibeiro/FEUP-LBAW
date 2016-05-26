<?php /* Smarty version Smarty-3.1.15, created on 2016-05-13 09:45:49
         compiled from "/opt/lbaw/lbaw1552/public_html/frmk/templates/users/friendList.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1118288912573583326616a8-91005282%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b21cfbd394ebfdbc387307a5c3e39f86f14c2058' => 
    array (
      0 => '/opt/lbaw/lbaw1552/public_html/frmk/templates/users/friendList.tpl',
      1 => 1463125547,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1118288912573583326616a8-91005282',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_573583326fa952_26764608',
  'variables' => 
  array (
    'friends' => 0,
    'friend' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_573583326fa952_26764608')) {function content_573583326fa952_26764608($_smarty_tpl) {?><!DOCTYPE html>
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
          <h2 class="panel-heading"> Friends </h2>
          <div class="row">
            <div class="col-lg-4 panel-content">
              <div class="row">
                <?php  $_smarty_tpl->tpl_vars['friend'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['friend']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['friends']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['friend']->key => $_smarty_tpl->tpl_vars['friend']->value) {
$_smarty_tpl->tpl_vars['friend']->_loop = true;
?>
                <div class="col-lg-5 vcenter">
                  <img src="../images/defaultProfilePicture.png" style="width: 150px; height: 150px;"/>
                </div>
                <div class="col-lg-6 vcenter">
                  <p><a href="showProfilePage.php?username=<?php echo $_smarty_tpl->tpl_vars['friend']->value['username'];?>
"> <?php echo $_smarty_tpl->tpl_vars['friend']->value['username'];?>
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
