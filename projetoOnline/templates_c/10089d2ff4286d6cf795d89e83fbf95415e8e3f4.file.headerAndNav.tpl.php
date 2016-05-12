<?php /* Smarty version Smarty-3.1.15, created on 2016-05-02 21:39:10
         compiled from "/opt/lbaw/lbaw1552/public_html/frmk/templates/common/headerAndNav.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1712109368572410124eb569-05794368%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '10089d2ff4286d6cf795d89e83fbf95415e8e3f4' => 
    array (
      0 => '/opt/lbaw/lbaw1552/public_html/frmk/templates/common/headerAndNav.tpl',
      1 => 1462217906,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1712109368572410124eb569-05794368',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_572410124efe16_07613395',
  'variables' => 
  array (
    'username' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_572410124efe16_07613395')) {function content_572410124efe16_07613395($_smarty_tpl) {?>  <body>
    <nav class="navbar navbar-default">
      <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-icon" href="showFeedPage.php"><img src="../images/home.png" height="30" alt="Home"/></a>
        </div>
        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
          <form class="navbar-form navbar-left" role="search">
            <div class="form-group">
              <input type="text" class="form-control search-input" placeholder="Search">
            </div>
            <button type="submit" class="btn btn-default">Submit</button>
          </form>
          <ul class="nav navbar-nav">
            <li><a href="showProfilePage.php?username=<?php echo $_smarty_tpl->tpl_vars['username']->value;?>
">Profile</a></li>
            <li><a href="#">Friends</a></li>
            <li><a href="showMessagesPage.php">Messages</a></li>
          </ul>
          <ul class="nav navbar-nav navbar-right">
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Options <span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li><a href="#">Edit Profile</a></li>
                <li role="separator" class="divider"></li>
                <li><a href="#">Logout</a></li>
              </ul>
            </li>
          </ul>
        </div><!-- /.navbar-collapse -->
      </div><!-- /.container-fluid -->
    </nav>
<?php }} ?>
