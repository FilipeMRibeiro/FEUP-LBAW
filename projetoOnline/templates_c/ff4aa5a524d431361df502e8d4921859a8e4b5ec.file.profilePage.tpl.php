<?php /* Smarty version Smarty-3.1.15, created on 2016-06-06 21:11:16
         compiled from "/usr/users2/mieic2013/up201303832/public_html/projetoOnline/templates/users/profilePage.tpl" */ ?>
<?php /*%%SmartyHeaderCode:77199056157545dde1043c5-44866905%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ff4aa5a524d431361df502e8d4921859a8e4b5ec' => 
    array (
      0 => '/usr/users2/mieic2013/up201303832/public_html/projetoOnline/templates/users/profilePage.tpl',
      1 => 1465240273,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '77199056157545dde1043c5-44866905',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_57545dde1a8f96_09428056',
  'variables' => 
  array (
    'username' => 0,
    'userInfo' => 0,
    'posts' => 0,
    'post' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57545dde1a8f96_09428056')) {function content_57545dde1a8f96_09428056($_smarty_tpl) {?><!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.5 -->
    <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">

    <link rel="stylesheet" href="../css/profile_page.css">
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
        <div class="col-lg-2 col-md-3 col-sm-4 col-xs-4 profile-information-space">
          <div class="row">
            <div class="col-lg-12 profile-image">
              <img src="../uploads/profile-picture/<?php echo $_smarty_tpl->tpl_vars['username']->value;?>
" onerror="this.src='../images/defaultProfilePicture.png'" alt="Profile Picture"/>
            </div>
          </div>
          <div class="row">
            <div class="col-lg-12 profile-information panel panel-default">
              <p><span class="profile-name"> <?php echo $_smarty_tpl->tpl_vars['userInfo']->value['user_name'];?>
 </span> </p>
              <p><i class="fa fa-mars fa-lg"> <?php echo $_smarty_tpl->tpl_vars['userInfo']->value['gender_name'];?>
 </i></p>
              <p><i class="fa fa-birthday-cake fa-lg"> <?php echo $_smarty_tpl->tpl_vars['userInfo']->value['birthday'];?>
 </i></p>
              <p><i class="fa fa-paw fa-lg"> <?php echo $_smarty_tpl->tpl_vars['userInfo']->value['species_name'];?>
 </i></p>
              <p><i class="fa fa-paw fa-lg"> <?php echo $_smarty_tpl->tpl_vars['userInfo']->value['race_name'];?>
 </i></p>
              <p><i class="fa fa-map-marker fa-lg"> <?php echo $_smarty_tpl->tpl_vars['userInfo']->value['city_name'];?>
, <?php echo $_smarty_tpl->tpl_vars['userInfo']->value['country_name'];?>
 </i></p>
              <p><i class="fa fa-user fa-lg"><a class="addFriend" href=""> <span class="receiverUsername hidden"><?php echo $_smarty_tpl->tpl_vars['username']->value;?>
</span> Add friend </a></i></p>
              <p><i class="fa fa-envelope fa-lg"><a id="SendMessageButton" data-toggle="modal" data-target="#myModal"> Send Message</a></i></p>
            </div>
            <div class="modal fade" id="myModal" role="dialog">
              <div class="modal-dialog">
                <div class="modal-content">
                  <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Send Message</h4>
                  </div>
                  <div class="modal-body">
                    <form action="#" method="post" enctype="multipart/form-data" class="send-message-form">
                      <p>Message:</p>
                      <p><textarea COLS=40 ROWS=6 name="description" id="description"></textarea></p>
                      <input type="submit" value="Send Message" name="submit" class="upload-image-submit">
                    </form>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-5 col-lg-offset-1 col-xs-12 feed-space">
          <div class="row">
            <div class="col-lg-12 post-bar panel panel-default">
              <form method="POST" class="submitPost" action="#" role="form">
                <div class="col-lg-10 share">
                  <input type="text" name="description" required class="form-control" placeholder="Share Something...">
                </div>
                <div class="col-lg-2 share-button">
                  <button type="submit" id="submitButton" class="btn btn-info"> Share </button>
                </div>
              </form>
            </div>
          </div>

          <div class="recentlyCreatedPostSpace"></div>
          <?php  $_smarty_tpl->tpl_vars['post'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['post']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['posts']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['post']->key => $_smarty_tpl->tpl_vars['post']->value) {
$_smarty_tpl->tpl_vars['post']->_loop = true;
?>

          <div class="row post-row">
            <div class="col-lg-3 post-profile-picture">
              <img class="img" src="../images/defaultProfilePicture.png" alt="Profile Picture"/>
            </div>
            <div class="col-lg-9 post-information">
              <div class="row">
                <div class="col-lg-12 post-owner-description">
                  <h3><a href="showProfilePage.php?username=<?php echo $_smarty_tpl->tpl_vars['username']->value;?>
"> <?php echo $_smarty_tpl->tpl_vars['username']->value;?>
 </a></h3>
                  <p> <?php echo $_smarty_tpl->tpl_vars['post']->value['description'];?>
 </p>
                  <p style="color: grey;"> <?php echo $_smarty_tpl->tpl_vars['post']->value['date'];?>
  </p>
                  <div id="pointer"></div>
                </div>
              </div>
            </div>
            <div class="col-lg-3">
            </div>
            <div class="col-lg-9 ">
              <p><form action="#" class="likePost" method="POST">
                <p> <i class="fa fa-thumbs-up fa-lg"><span class="upvotes"> <?php echo $_smarty_tpl->tpl_vars['post']->value['upvotes'];?>
</span> </i> </p>
                <span class="getPostID" style="display:none;"> <?php echo $_smarty_tpl->tpl_vars['post']->value['postid'];?>
 </span>
                <?php if ($_smarty_tpl->tpl_vars['post']->value['liked']==0) {?>
                  <button type="submit" id="upvoteButton" class="btn btn-info"> Like </button>
                <?php } else { ?>
                  <button type="submit" id="downvoteButton" class="btn btn-info"> Liked </button>
                <?php }?>
              </form></p>
            </div>
          </div>

          <?php } ?>

        </div>
        <div class="col-lg-3 col-lg-offset-1 activities-awards-column">
          <div class="row">
            <div class="col-lg-12 activities panel panel-default">
              <h2 class="panel-heading">Recent Activities</h2>
              <ul class="panel-content">
                <li>  Running </li>
                <li> Hunting </li>
              </ul>
            </div>
          </div>
          <div class="row">
            <div class="col-lg-12 awards panel panel-default">
              <h2 class="panel-heading">Awards(3)</h2>
              <div class="panel-body">
                <img src="../images/award.png" style="width: 30%" alt="Award"/>
                <img src="../images/award.png" style="width: 30%" alt="Award"/>
                <img src="../images/award.png" style="width: 30%" alt="Award"/>
                <p></p>
                <a href=#>See all</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>


    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>

    <script src="../javascript/profilePost.js"></script>
    <script src="../javascript/addFriend.js"></script>
    <script src="../javascript/likePost.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="../bootstrap/js/bootstrap.min.js"></script>
  </body>
</html>
<?php }} ?>
