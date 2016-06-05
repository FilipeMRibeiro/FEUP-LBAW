<?php /* Smarty version Smarty-3.1.15, created on 2016-05-27 00:40:09
         compiled from "/usr/users2/mieic2013/up201303834/public_html/projetoOnline/templates/common/headerAndNav.tpl" */ ?>
<?php /*%%SmartyHeaderCode:136077047057477b49d5ebe0-38320644%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '009c6542510e8d115836a794253a2105bdcd28a6' => 
    array (
      0 => '/usr/users2/mieic2013/up201303834/public_html/projetoOnline/templates/common/headerAndNav.tpl',
      1 => 1464266336,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '136077047057477b49d5ebe0-38320644',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_57477b49d64752_56188995',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57477b49d64752_56188995')) {function content_57477b49d64752_56188995($_smarty_tpl) {?>  <body>
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
            <li><a href="showOwnProfile.php">Profile</a></li>
            <li><a href="showFriendList.php">Friends</a></li>
            <li><a href="showMessagesPage.php">Messages</a></li>
          </ul>
          <ul class="nav navbar-nav navbar-right">
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Options <span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li><a href="#">Edit Profile</a></li>
                <li role="separator" class="divider"></li>
                <li><a href="../pages/logout.php">Logout</a></li>
              </ul>
            </li>
          </ul>
        </div><!-- /.navbar-collapse -->
      </div><!-- /.container-fluid -->
    </nav>
<?php }} ?>
