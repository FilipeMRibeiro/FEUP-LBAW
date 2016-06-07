<?php /* Smarty version Smarty-3.1.15, created on 2016-06-07 11:24:02
         compiled from "/usr/users2/mieic2013/up201303832/public_html/projetoOnline/templates/users/showEvents.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1842973828575692b2e88449-21477098%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b377f3b30e2dd77c35e66f1df152a53ea77da432' => 
    array (
      0 => '/usr/users2/mieic2013/up201303832/public_html/projetoOnline/templates/users/showEvents.tpl',
      1 => 1465291070,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1842973828575692b2e88449-21477098',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'createdEvents' => 0,
    'event' => 0,
    'joinedEvents' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_575692b3048478_92243167',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_575692b3048478_92243167')) {function content_575692b3048478_92243167($_smarty_tpl) {?><!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.5 -->
    <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/events_page.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">

    <link href='https://fonts.googleapis.com/css?family=Roboto:500' rel='stylesheet' type='text/css'>

    <title>Pawz - Events</title>
  </head>
  <?php echo $_smarty_tpl->getSubTemplate ('common/headerAndNav.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

    <div class="container-fluid main">
		<div class="row">
			<div class="created">
				<div class="col-lg-12 panel panel-default">
					<h2 class="panel-heading"> Events I Created<a href="../pages/eventCreationPage.php"> <input type="button" value="Create Event" /></a> </h2>
					<?php  $_smarty_tpl->tpl_vars['event'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['event']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['createdEvents']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['event']->key => $_smarty_tpl->tpl_vars['event']->value) {
$_smarty_tpl->tpl_vars['event']->_loop = true;
?>
					<div class="col-lg-9 event-row">        
						<h3><a href="../pages/showCreatedEventPage.php?id=<?php echo $_smarty_tpl->tpl_vars['event']->value['eventid'];?>
"> <?php echo $_smarty_tpl->tpl_vars['event']->value['name'];?>
 </a></h3>
						<div class="col-lg-9 event-information">
							<p> <?php echo $_smarty_tpl->tpl_vars['event']->value['description'];?>
 </p>
							<p> Start Date: <?php echo $_smarty_tpl->tpl_vars['event']->value['date'];?>
 </p>
							<p> Availability: <?php echo $_smarty_tpl->tpl_vars['event']->value['maxParticipants'];?>
 </p>
							<p> Local: <?php echo $_smarty_tpl->tpl_vars['event']->value['local'];?>
 </p>
						</div>
					</div>
					<?php } ?>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="joined">
				<div class="col-lg-12 panel panel-default">
					<h2 class="panel-heading"> Events I Joined </h2>
					<?php  $_smarty_tpl->tpl_vars['event'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['event']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['joinedEvents']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['event']->key => $_smarty_tpl->tpl_vars['event']->value) {
$_smarty_tpl->tpl_vars['event']->_loop = true;
?>
					<div class="col-lg-9 event-row">        
						<h3><a href="../pages/showJoinedEventPage.php?id=<?php echo $_smarty_tpl->tpl_vars['event']->value['eventid'];?>
"> <?php echo $_smarty_tpl->tpl_vars['event']->value['name'];?>
 </a></h3>
						<div class="col-lg-9 event-information">
							<p> <?php echo $_smarty_tpl->tpl_vars['event']->value['description'];?>
 </p>
							<p> Start Date: <?php echo $_smarty_tpl->tpl_vars['event']->value['date'];?>
 </p>
							<p> Local: <?php echo $_smarty_tpl->tpl_vars['event']->value['local'];?>
 </p>
							<p> Availability: <?php echo $_smarty_tpl->tpl_vars['event']->value['maxParticipants'];?>
 </p>
							<p> Creator: <a href="../pages/showProfilePage.php?username=<?php echo $_smarty_tpl->tpl_vars['event']->value['username'];?>
"> <?php echo $_smarty_tpl->tpl_vars['event']->value['username'];?>
 </a></p>
						</div>
					</div>
					<?php } ?>
				</div>
			</div>
		</div>
	</div>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>

    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="../bootstrap/js/bootstrap.min.js"></script>
  </body>
</html><?php }} ?>
