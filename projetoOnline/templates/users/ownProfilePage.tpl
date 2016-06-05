<!DOCTYPE html>
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

    <style>
      .dropdown-submenu {
          position: relative;
      }

      .dropdown-submenu .dropdown-menu {
          top: 0;
          left: 100%;
          margin-top: -1px;
      }
      .raceButton{
        background-color: white;
        border: none;
        color: black;
      }

      #editProfileButton{

      }

    </style>
  </head>
  {include file='common/headerAndNav.tpl'}
    <div class="container-fluid main">
      <div class="row">
        <div class="col-lg-2 col-md-3 col-sm-4 col-xs-4 profile-information-space">
          <div class="row">
            <div class="col-lg-12 profile-image">
              <img src="../uploads/profile-picture/{$username}" onerror="this.src='../images/defaultProfilePicture.png'" alt="Profile Picture"/>
            </div>
          </div>
          <div class="row">
            <div class="col-lg-12 profile-information panel panel-default">
              <p><span class="profile-name"> {$userInfo.user_name} </span> </p>
              {if $userInfo.gender_name eq 'Male'}
                <p><i class="fa fa-mars fa-lg"> {$userInfo.gender_name} </i></p>
              {/if}
              {if $userInfo.gender_name eq 'Female'}
                <p><i class="fa fa-venus fa-lg"> {$userInfo.gender_name} </i></p>
              {/if}
              {if $userInfo.gender_name eq 'Other'}
                <p><i class="fa fa-transgender-alt fa-lg"> {$userInfo.gender_name} </i></p>
              {/if}
              <p><i class="fa fa-birthday-cake fa-lg"> {$userInfo.birthday} </i></p>
              <p><i class="fa fa-paw fa-lg"> {$userInfo.species_name} </i></p>
              <p><i class="fa fa-paw fa-lg"> {$userInfo.race_name} </i></p>
              <p><i class="fa fa-map-marker fa-lg"> {$userInfo.city_name}, {$userInfo.country_name} </i></p>
            </div>
              <div class="col-lg-12 profile-information panel panel-default">
                <br>
                <p><i class="fa fa-cog fa-lg"><a id="editProfileButton" data-toggle="modal" data-target="#myModal1"> Edit Profile </a></i></p>
                <p><i class="fa fa-cog fa-lg"><a id="ProfilePicButton" data-toggle="modal" data-target="#myModal2"> New Profile Pic </a></i></p>
              </div>
              <!-- Edit profile box -->
              <div class="modal fade" id="myModal1" role="dialog">
                <div class="modal-dialog">
                  <div class="modal-content">
                    <div class="modal-header">
                      <button type="button" class="close" data-dismiss="modal">&times;</button>
                      <h4 class="modal-title">Edit Profile</h4>
                    </div>
                    <div class="modal-body">
                      <form method="POST" class ="submitEditProfile" action="#">

                        <p>Gender:</p>
                        <input type="radio" name="gender" value="Male"> Male &nbsp
                        <input type="radio" name="gender" value="Female"> Female &nbsp
                        <input type="radio" name="gender" value="Other"> Other <br><br>
                        <p>Birthday:</p>
                        <input type="date" name="birthday" value={$userInfo.birthday}><br><br>
                        <p>Email:</p>
                        <input type="text" name="email" value={$userInfo.email}><br><br>
                        <p>Species & Race:</p>
                        <div class="dropdown">
                          <button class="btn btn-default dropdown-toggle speciesRace" type="button" data-toggle="dropdown">Select
                          <span class="caret"></span></button>
                          <ul class="dropdown-menu">
                            {foreach $species as $speciesName}
                            <li class="dropdown-submenu">
                              <a class="test-submenu">{$speciesName.name} <span class="caret"></span></a>
                              <ul class="dropdown-menu">
                                {foreach $speciesName.race as $race}
                                <li><button type="button" class="raceButton" name="race" value ="{$race.race_id}">{$race.race_name}</button></li>
                                {/foreach}
                                <li class="dropdown-submenu">
                              </ul>
                            </li>
                            {/foreach}
                          </ul>
                        </div>
                        <br>
                        <p>Country & City:</p>
                        <div class="dropdown">
                          <button class="btn btn-default dropdown-toggle countryCity" type="button" data-toggle="dropdown">Select
                          <span class="caret"></span></button>
                          <ul class="dropdown-menu">
                            {foreach $country as $countryName}
                            <li class="dropdown-submenu">
                              <a class="test-submenu">{$countryName.name} <span class="caret"></span></a>
                              <ul class="dropdown-menu">
                                {foreach $countryName.city as $city}
                                <li><button type="button" class="cityButton" name="city" value ="{$city.city_id}">{$city.city_name}</button></li>
                                {/foreach}
                                <li class="dropdown-submenu">
                              </ul>
                            </li>
                            {/foreach}
                          </ul>
                        </div>
                          <br><br>
                        <button type="submit" id="submitButtonEditProfile" class="btn btn-default">Save</button>
                      </form>
                    </div>
                  </div>
                </div>
              </div>
              <!-- -->
              <!-- New pic box -->
              <div class="modal fade" id="myModal2" role="dialog">
                <div class="modal-dialog">
                  <div class="modal-content">
                    <div class="modal-header">
                      <button type="button" class="close" data-dismiss="modal">&times;</button>
                      <h4 class="modal-title">Upload New Profile Picture</h4>
                    </div>
                    <div class="modal-body">
                      <form action="#" method="post" enctype="multipart/form-data" class="upload-image-form">
                        <p>Select image to upload:</p>
                        <input type="file" name="image" id="fileToUpload">
                        <input type="submit" value="Upload Image" name="submit" class="upload-image-submit">
                      </form>
                    </div>
                  </div>
                </div>
              </div>
              <!-- -->
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
          {foreach $posts as $post}

          <div class="row post-row">
            <div class="col-lg-3 post-profile-picture">
              <img class="img" src="../images/defaultProfilePicture.png" alt="Profile Picture"/>
            </div>
            <div class="col-lg-9 post-information">
              <div class="row">
                <div class="col-lg-12 post-owner-description">
                  <h3><a href="showProfilePage.php?username={$username}"> {$username} </a></h3>
                  <p> {$post.description} </p>
                  <p style="color: grey;"> {$post.date}  </p>
                  <div id="pointer"></div>
                </div>
              </div>
              <!--
              <div class="row">
                <div class="col-lg-12 post-image">
                  <img class="img" src="../images/rex_and_bae.png" style="width: 90%;" alt="Image Posted"/>
                </div>
              </div>
              <div class="row">
                <div class="col-lg-12 post-comments-likes">
                  <p> <i class="fa fa-thumbs-up"></i> 10 <i class="fa fa-comment"></i> 4 </p>
                </div>
              </div>
            -->
            </div>
          </div>

          {/foreach}

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
    <script src="../javascript/editProfile.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="../bootstrap/js/bootstrap.min.js"></script>
  </body>
</html>
