<?php /* Smarty version Smarty-3.1.15, created on 2016-06-07 12:29:11
         compiled from "/usr/users2/mieic2013/up201303832/public_html/projetoOnline/templates/users/groupCreationPage.tpl" */ ?>
<?php /*%%SmartyHeaderCode:4345104625756a1f7d0ac12-10029434%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ee7aa9330a3654044b953f0271f61404379db322' => 
    array (
      0 => '/usr/users2/mieic2013/up201303832/public_html/projetoOnline/templates/users/groupCreationPage.tpl',
      1 => 1465291070,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '4345104625756a1f7d0ac12-10029434',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_5756a1f7e23cd1_57390300',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5756a1f7e23cd1_57390300')) {function content_5756a1f7e23cd1_57390300($_smarty_tpl) {?><!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title> Pawz - Create Group</title>

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

  <body>
    <?php echo $_smarty_tpl->getSubTemplate ('common/headerAndNav.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

    <div class ="container">
      <div class="row">
        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 vcenter">
          <div class="grey-box"><img src="../images/pets2.png" alt="Pets"></div>
        </div>
        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 vcenter">
          <div class="creation-form">
            <form method="post" action="checkGroupCreation.php" class="groupCreation-form">
      				<img src="../images/logo.png" alt="logo" class="img-responsive" />
              <div class="group-info">
                <input type="name" name="name" required class="form-control name" placeholder="Group Name" />
				<input type="description" name="description" required class="form-control description" placeholder="Group Description" />
              </div>
      				<button type="submit" name="go" class="btn btn-primary btn-block">Create Group</button>
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
