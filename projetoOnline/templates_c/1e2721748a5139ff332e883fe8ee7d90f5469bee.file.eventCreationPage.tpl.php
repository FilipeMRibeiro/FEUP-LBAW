<?php /* Smarty version Smarty-3.1.15, created on 2016-06-02 22:56:16
         compiled from "/usr/users2/mieic2011/ei11141/public_html/LBAW/frmk/templates/users/eventCreationPage.tpl" */ ?>
<?php /*%%SmartyHeaderCode:215413849574d5766501438-21047858%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1e2721748a5139ff332e883fe8ee7d90f5469bee' => 
    array (
      0 => '/usr/users2/mieic2011/ei11141/public_html/LBAW/frmk/templates/users/eventCreationPage.tpl',
      1 => 1464904572,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '215413849574d5766501438-21047858',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_574d57665cdee9_58941424',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_574d57665cdee9_58941424')) {function content_574d57665cdee9_58941424($_smarty_tpl) {?><!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title> Pawz - Create Event</title>

    <!-- Bootstrap -->
    <link href="../bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="../css/groupCreation.css" rel="stylesheet">
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
	<?php echo $_smarty_tpl->getSubTemplate ('common/headerAndNav.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

  <body>
    <div class ="container">
      <div class="row">
        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 vcenter">
          <div class="grey-box"><img src="../images/pets2.png" alt="Pets"></div>
		</div>
        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 vcenter">
          <div class="form">
            <form method="post" action="checkEventCreation.php" class="groupCreation-form">
      				<img src="../images/logo.png" alt="logo" class="img-responsive" />
              <div class="group-info">
                <input type="name" name="name" required class="form-control name" placeholder="Event Name" />
				<input type="description" name="description" required class="form-control description" placeholder="Event Description" />
				<input type="local" name="local" required class="form-control local" placeholder="Event Local"/>
				<label for="number">Maximum Number of Participants: </label>
				<input type="number" name="maxParticipants" required class="form-control maxParticipants" placeholder='0' />
				<label for="date"> Event Date: </label>
				<input type="date" name="date" required class="form-control date">
			  </div>
      				<button type="submit" name="go" class="btn btn-primary btn-block">Create Event</button>
      				<a href="showFeedPage.php">Cancel</a>
      		</form>
          </div>
        </div>
      </div>
    </div>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="../javascript/validateInput.js"></script>

    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="../bootstrap/js/bootstrap.min.js"></script>
  </body>
</html>
<?php }} ?>
