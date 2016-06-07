<?php /* Smarty version Smarty-3.1.15, created on 2016-06-07 13:44:08
         compiled from "/usr/users2/mieic2013/up201303832/public_html/projetoOnline/templates/users/friendList.tpl" */ ?>
<?php /*%%SmartyHeaderCode:179983400957545ddc2d6f22-78084272%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2bbf3457250334e93f0353762bf2c668f29713ac' => 
    array (
      0 => '/usr/users2/mieic2013/up201303832/public_html/projetoOnline/templates/users/friendList.tpl',
      1 => 1465299843,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '179983400957545ddc2d6f22-78084272',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_57545ddc37efc6_96942360',
  'variables' => 
  array (
    'friends' => 0,
    'friend' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57545ddc37efc6_96942360')) {function content_57545ddc37efc6_96942360($_smarty_tpl) {?><!DOCTYPE html>
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
            <div class="col-lg-12 panel-content">
              <div class="row">
                <?php  $_smarty_tpl->tpl_vars['friend'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['friend']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['friends']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['friend']->key => $_smarty_tpl->tpl_vars['friend']->value) {
$_smarty_tpl->tpl_vars['friend']->_loop = true;
?>
                <div class="col-lg-3">
                  <div class="col-lg-5 vcenter">
                    <img src="../uploads/profile-picture/<?php echo $_smarty_tpl->tpl_vars['friend']->value['username'];?>
" style="height:100px; width:100px;" onerror="this.src='../images/defaultProfilePicture.png'" alt="Profile Picture"/>
                  </div>
                  <div class="col-lg-6 vcenter">
                    <p><a href="showProfilePage.php?username=<?php echo $_smarty_tpl->tpl_vars['friend']->value['username'];?>
"> <?php echo $_smarty_tpl->tpl_vars['friend']->value['username'];?>
 </p>
                  </div>
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
