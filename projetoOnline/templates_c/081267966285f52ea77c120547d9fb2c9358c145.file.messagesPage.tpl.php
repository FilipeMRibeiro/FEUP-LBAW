<?php /* Smarty version Smarty-3.1.15, created on 2016-05-26 19:16:31
         compiled from "/usr/users2/mieic2013/up201303832/public_html/projetoOnline/templates/users/messagesPage.tpl" */ ?>
<?php /*%%SmartyHeaderCode:82606024057472f6f0e7651-34775115%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '081267966285f52ea77c120547d9fb2c9358c145' => 
    array (
      0 => '/usr/users2/mieic2013/up201303832/public_html/projetoOnline/templates/users/messagesPage.tpl',
      1 => 1463086791,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '82606024057472f6f0e7651-34775115',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'chats' => 0,
    'chat' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_57472f6f19b465_94846136',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57472f6f19b465_94846136')) {function content_57472f6f19b465_94846136($_smarty_tpl) {?><!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.5 -->
    <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">

    <link rel="stylesheet" href="../css/messages_page.css">
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
        <h2 class="panel-heading"> Messages </h2>
        <div class="col-lg-3" style="border-right-style: solid; max-height: 700px;">
          <div class="panel-content">
            <?php  $_smarty_tpl->tpl_vars['chat'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['chat']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['chats']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['chat']->key => $_smarty_tpl->tpl_vars['chat']->value) {
$_smarty_tpl->tpl_vars['chat']->_loop = true;
?>
            <div class="row message-box">
              <div class="col-lg-3 vcenter profile-picture">
                <img src="../images/defaultProfilePicture.png"/>
              </div>
              <div class="col-lg-8 vcenter last-message">
                <p class="profile-name"><?php echo $_smarty_tpl->tpl_vars['chat']->value['username'];?>
</p>
                <p><?php echo $_smarty_tpl->tpl_vars['chat']->value['message']['description'];?>
</p>
              </div>
            </div>
            <?php } ?>
          </div>
        </div>
        <div class="col-lg-9 message">
          <div class="panel-content">
            <div class="col-lg-12">
              <div class="row">
                <div class="col-lg-12 panel panel-default" style="min-height:300px;">
                  <div class="row message">
                    <div class="col-lg-1 message-profile-picture">
                      <img src="../images/defaultProfilePicture.png"/>
                    </div>
                    <div class="col-lg-10 message-content">
                      <p class="profile-name"><?php echo $_smarty_tpl->tpl_vars['chats']->value[0]['username'];?>
</p>
                      <p> <?php echo $_smarty_tpl->tpl_vars['chats']->value[0]['message']['description'];?>
 </p>
                      <p> <?php echo $_smarty_tpl->tpl_vars['chats']->value[0]['message']['date'];?>
 </p>
                    </div>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-lg-12">
                  <input type="text" class="form-control" style="padding-bottom: 10%; padding-top: 2%;" placeholder="Write a message...">
                  <button type="submit" class="btn btn-info pull-right"> Send </button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>

  <script src="../javascript/friendRequest.js"></script>

  <!-- Include all compiled plugins (below), or include individual files as needed -->
  <script src="../bootstrap/js/bootstrap.min.js"></script>
</body>
</html>
<?php }} ?>
