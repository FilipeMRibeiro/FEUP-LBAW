<?php /* Smarty version Smarty-3.1.15, created on 2016-06-05 22:41:49
         compiled from "/usr/users2/mieic2013/up201303834/public_html/projetoOnline/templates/users/messagesPage.tpl" */ ?>
<?php /*%%SmartyHeaderCode:21333691865751379c5d8552-76072919%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '031f33eed308ed16ae7c5d6d388e3b22674ef26c' => 
    array (
      0 => '/usr/users2/mieic2013/up201303834/public_html/projetoOnline/templates/users/messagesPage.tpl',
      1 => 1465155513,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '21333691865751379c5d8552-76072919',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_5751379c706cc1_07674577',
  'variables' => 
  array (
    'username' => 0,
    'chats' => 0,
    'chat' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5751379c706cc1_07674577')) {function content_5751379c706cc1_07674577($_smarty_tpl) {?><!DOCTYPE html>
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

  <span class="session-Username" style="display:none;"><?php echo $_smarty_tpl->tpl_vars['username']->value;?>
</span>
  <div class="container-fluid main">
    <div class="row">
      <div class="col-lg-12 panel panel-default">
        <h2 class="panel-heading"> Messages </h2>
        <div class="col-lg-3" !--style="border-right-style: solid; max-height: 700px;" >
          <div class="panel-content chat-content">
            <?php  $_smarty_tpl->tpl_vars['chat'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['chat']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['chats']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['chat']->key => $_smarty_tpl->tpl_vars['chat']->value) {
$_smarty_tpl->tpl_vars['chat']->_loop = true;
?>
            <div class="chat-box<?php echo $_smarty_tpl->tpl_vars['chat']->value['name'];?>
 chat-box">
              <span class="getChatID" style="display:none;"><?php echo $_smarty_tpl->tpl_vars['chat']->value['chatid'];?>
 </span>
              <div class="chatFill"> </div>
            </div>
            <?php } ?>
          </div>
        </div>
        <?php  $_smarty_tpl->tpl_vars['chat'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['chat']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['chats']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['chat']->key => $_smarty_tpl->tpl_vars['chat']->value) {
$_smarty_tpl->tpl_vars['chat']->_loop = true;
?>
        <div class="col-lg-9 chat-messages chat<?php echo $_smarty_tpl->tpl_vars['chat']->value['chatid'];?>
 non-selected" >
          <div class="panel-content">
            <div class="col-lg-12">
              <div class="row">
                <div class="col-lg-12 panel panel-default messages-panel messages-panel<?php echo $_smarty_tpl->tpl_vars['chat']->value['chatid'];?>
" style="height:300px;">
                  <div class="chat-space<?php echo $_smarty_tpl->tpl_vars['chat']->value['chatid'];?>
 chat-space">

                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-lg-12">
                  <form action="#" class="messageForm" method="POST" role="form">
                    <input type="text" name="description" required class="form-control messageToSend<?php echo $_smarty_tpl->tpl_vars['chat']->value['chatid'];?>
" style="padding-bottom: 10%; padding-top: 2%;" placeholder="Write a message...">
                    <button type="submit" class="btn btn-info pull-right submitMessage"> Send </button>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
        <?php } ?>
      </div>
    </div>
  </div>

  <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>

  <script src="../javascript/friendRequest.js"></script>
  <script src="../javascript/messages.js"></script>

  <!-- Include all compiled plugins (below), or include individual files as needed -->
  <script src="../bootstrap/js/bootstrap.min.js"></script>
</body>
</html>
<?php }} ?>
