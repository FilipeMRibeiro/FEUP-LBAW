<?php /* Smarty version Smarty-3.1.15, created on 2016-06-07 14:20:45
         compiled from "/usr/users2/mieic2013/up201303832/public_html/projetoOnline/templates/users/feedPage.tpl" */ ?>
<?php /*%%SmartyHeaderCode:28992985657545d52af0562-98124565%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ed3f41b5d61af4d7672149307a62b13c3844ac57' => 
    array (
      0 => '/usr/users2/mieic2013/up201303832/public_html/projetoOnline/templates/users/feedPage.tpl',
      1 => 1465302042,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '28992985657545d52af0562-98124565',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_57545d52c15c41_12191506',
  'variables' => 
  array (
    'username' => 0,
    'posts' => 0,
    'post' => 0,
    'comment' => 0,
    'groups' => 0,
    'group' => 0,
    'events' => 0,
    'event' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57545d52c15c41_12191506')) {function content_57545d52c15c41_12191506($_smarty_tpl) {?><!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.5 -->
    <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">

    <link rel="stylesheet" href="../css/feed_page.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">

    <link href='https://fonts.googleapis.com/css?family=Roboto:500' rel='stylesheet' type='text/css'>

    <title>Pawz</title>
  </head>
  <body>
  <?php echo $_smarty_tpl->getSubTemplate ('common/headerAndNav.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

    <div class="container-fluid main">
      <div class="row">
        <div class="col-lg-9 col-xs-12 feed-space">
          <div class="row">
            <div class="col-lg-12 post-bar panel panel-default">
              <form action="#" class="submitPost" method="POST" role="form">
                <div class="col-lg-2 picture-share-something">
                  <img src="../uploads/profile-picture/<?php echo $_smarty_tpl->tpl_vars['username']->value;?>
" onerror="this.src='../images/defaultProfilePicture.png'" alt="Profile Picture"/>
                </div>
                <div class="col-lg-8 share">
                  <input type="text" name="description" required class="form-control" placeholder="Share Something...">
                  <input type="file" name="image" id="imageToUpload" accept="image/*">
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
            <div class="col-lg-2 post-profile-picture">
              <img src="../uploads/profile-picture/<?php echo $_smarty_tpl->tpl_vars['post']->value['username'];?>
" onerror="this.src='../images/defaultProfilePicture.png'" alt="Profile Picture"/>
            </div>
            <div class="col-lg-10 post-information">
              <div class="row">
                <div class="col-lg-12 post-owner-description">
                  <h3><a href="../pages/showProfilePage.php?username=<?php echo $_smarty_tpl->tpl_vars['post']->value['username'];?>
"> <?php echo $_smarty_tpl->tpl_vars['post']->value['username'];?>
 </a> </h3>
                  <p> <?php echo $_smarty_tpl->tpl_vars['post']->value['description'];?>
 </p>
                  <p style="color: grey;"> <?php echo $_smarty_tpl->tpl_vars['post']->value['date'];?>
  </p>
                  <div id="pointer"></div>
                </div>
              </div>
            </div>
            <div class="col-lg-2">
            </div>
            <div class="col-lg-1 ">
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
            <div class="col-lg-2">
              <p><form action="#" class="commentsPost" method="POST">
                <p> <i class="fa fa-comment fa-lg"><span class="comments"> <?php echo $_smarty_tpl->tpl_vars['post']->value['numberOfComments'];?>
</span> </i> </p>
                <span class="getPostID" style="display:none;"><?php echo $_smarty_tpl->tpl_vars['post']->value['postid'];?>
 </span>
                  <button type="submit" id="commentsButton" class="btn btn-info"> See Comments </button>
              </form></p>
            </div>
            <div class="col-lg-12 comments-space<?php echo $_smarty_tpl->tpl_vars['post']->value['postid'];?>
" style="display:none;">
              <div class="col-lg-12">
                <div class="col-lg-12 comment-information">
                  <div class="row commentsDisplay">
                    <div class="col-lg-12 comment-owner-description">
                        <?php  $_smarty_tpl->tpl_vars['comment'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['comment']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['post']->value['comments']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['comment']->key => $_smarty_tpl->tpl_vars['comment']->value) {
$_smarty_tpl->tpl_vars['comment']->_loop = true;
?>
                        <p><a href="../pages/showProfilePage.php?username=<?php echo $_smarty_tpl->tpl_vars['comment']->value['username'];?>
"> <?php echo $_smarty_tpl->tpl_vars['comment']->value['username'];?>
 </a> <?php echo $_smarty_tpl->tpl_vars['comment']->value['description'];?>
 </p>
                        <?php } ?>
                        <div class ="new-comments">

                        </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-lg-12">
                <div class="row">
                  <div class="col-lg-12">
                    <p>
                    <form class="comment-form" action="#" method="post">
                      <input type="text" name="comment" class="comment-text" size="100" placeholder="Comment..."></textarea>
                      <input type="submit" value="Send" class="btn btn-info send-comment">
                    </form>
                    </p>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <?php } ?>
        </div>

        <div class="col-lg-3 col-md-3 col-sm-4 col-xs-4">
          <div class="row">
            <div class="col-lg-12 groups panel panel-default">
              <h2 style="text-align: center;" class="panel-heading"> <a href="../pages/showGroups.php"> My Groups </a> </h2>
              <div class="panel-content">
				<?php  $_smarty_tpl->tpl_vars['group'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['group']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['groups']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['group']->key => $_smarty_tpl->tpl_vars['group']->value) {
$_smarty_tpl->tpl_vars['group']->_loop = true;
?>
				<div class="group-row">
					<h3><a href="../pages/showJoinedGroupPage.php?id=<?php echo $_smarty_tpl->tpl_vars['group']->value['communityid'];?>
"> <?php echo $_smarty_tpl->tpl_vars['group']->value['name'];?>
 </a></h3>
				 </div>
				 <?php } ?>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-lg-12 events panel panel-default">
              <h2 style="text-align: center;" class="panel-heading"> <a href="../pages/showEvents.php"> My Events </a> </h2>
              <div class="panel-content">
                <?php  $_smarty_tpl->tpl_vars['event'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['event']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['events']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['event']->key => $_smarty_tpl->tpl_vars['event']->value) {
$_smarty_tpl->tpl_vars['event']->_loop = true;
?>
				<div class="event-row">
					<h3><a href="../pages/showJoinedEventPage.php?id=<?php echo $_smarty_tpl->tpl_vars['event']->value['eventid'];?>
"> <?php echo $_smarty_tpl->tpl_vars['event']->value['name'];?>
 </a></h3>
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

    <script src="../javascript/feedPost.js"></script>
    <script src="../javascript/likePost.js"></script>
    <script src="../javascript/commentsPost.js"></script>

    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="../bootstrap/js/bootstrap.min.js"></script>
  </body>
</html>
<?php }} ?>
