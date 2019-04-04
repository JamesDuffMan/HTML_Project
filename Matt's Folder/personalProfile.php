<?php include('config.php'); ?>
<?php include('include/logic/common_functions.php'); ?>
<?php include('include/logic/userPRofile.php'); ?>

<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>User Profile</title>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <!-- Bootstrap -->
    
    </head>
    <body>
    <div id="navigation">
    <nav class="navbar navbar-fixed-top" role="navigation">
      <div class="container">
        <div class="row">
          <div class="site-logo">
            <a href="index.html" class="brand">mowie</a>
          </div>

          <!-- Brand and toggle get grouped for better mobile display -->
          <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#menu">
              <i class="fa fa-bars"></i>
            </button>
          </div>
          <!-- Collect the nav links, forms, and other content for toggling -->
          <div class="collapse navbar-collapse" id="menu">
            <ul class="nav navbar-nav navbar-right">
              <li class="active"><a href="#home">Home</a></li>
              <li><a href="#profile">profile</a></li>
			  <li><a href="#search">Search</a></li>
              <li><a href="#logout">log out</a></li>
            </ul>
          </div>
          <!-- /.Navbar-collapse -->
        </div>
      </div>
      <!-- /.container -->
    </nav>
  </div>
  <!-- /Navigation -->
  <br>
  <br>
    <div class="container">
        <div class="row profile">
        <?php $userData = getUserData(getID($_SESSION['username']));?>
            <div class="col-md-3">
                <div class="profile-sidebar">
                    <div class="profile-user-pic">
                    <img src="https://pbs.twimg.com/profile_images/952771549349609472/ExlMEoAx_400x400.jpg" alt="profile pic" class="img-responsive img-circle">
                    </div>
                    <strong><u>Update your name</u></strong>
                    <form action="personalProfile.php?update=name" method="POST">
                      Full Name: <input type="text" maxlength="50" name="full_name" 
                                  value="<?php if(isset($_POST['full_name'])) echo trim(mysql_real_escape_string($_POST['full_name'])); 
                                  else echo $usersData['full_name']; ?>" />
                      <input type="submit" name="nameSubmit" value="Update" />
                    </form>    
                </div>
            </div>
            <div class="col-md-9" id="profile-content">
            <strong><u>Update your bio</u></strong>
                    <form action="personalProfile.php?update=bio" method="POST">
                      Bio: <textArea name="bio" maxlength="255"  
                                  value="<?php if(isset($_POST['bio'])) echo trim(mysql_real_escape_string($_POST['bio'])); 
                                  else echo $usersData['bio']; ?>" />
                      <input type="submit" name="bioSubmit" value="Update" />
                    </form> 
            </div>
        </div>
    </div>

    <footer>
    <div class="container">
      <div class="row">
        <div class="col-md-6 col-md-offset-3">
          <div class="text-center">
            <a href="#home" class="scrollup"><i class="fa fa-angle-up fa-3x"></i></a>
            <p>&copy;Copyright - Mowie. All Rights Reserved</p>
          </div>
        </div>
      </div>
    </div>
  </footer>

  <!-- Core JavaScript Files -->
  <script src="js/jquery-2.1.1.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/wow.min.js"></script>
  <script src="js/jquery.easing.min.js"></script>
  <script src="js/functions.js"></script>
  
    </body>
</html>