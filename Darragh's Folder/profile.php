<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>User Profile</title>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <!-- Bootstrap -->
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <link rel="stylesheet" href="css/font-awesome.min.css">
        <link href="css/animate.min.css" rel="stylesheet">
        <link href="css/animate.css" rel="stylesheet" />
        <link href="css/style.css" rel="stylesheet">
        <link href="style.css" rel="stylesheet">
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
            <div class="col-md-3">
                <div class="profile-sidebar">
                    <div class="profile-user-pic">
                    <img src="https://pbs.twimg.com/profile_images/952771549349609472/ExlMEoAx_400x400.jpg" alt="profile pic" class="img-responsive img-circle">
                    </div>
                        <div class="profile-user-title">
                            <div class="profile-username">
                            John Doe
                            </div>
                            <div class="profile-user-motto">This motto is terrible
                            </div>
                        </div>
                        <div class="profile-user-buttons">
                        <button class="btn btn-success btn-sm">Save</button>
                        <button class="btn btn-danger btn-sm">Shave</button>
                        </div>
                        <div class="profile-user-menu">
                            <ul class="nav">
                            <li class="active"><a href=""><i class="glyphicon glyphicon-home"></i> Overview</a></li>
                            <li><a href=""><i class="glyphicon glyphicon-user"></i> Beard Status</a></li>
                            <li><a href=""><i class="glyphicon glyphicon-envelope"></i> Message</a></li>
                            <li><a href=""><i class="glyphicon glyphicon-flag"></i> Report User</a></li>
                            </ul>
                        </div>
                </div>
            </div>
            <div class="col-md-9" id="profile-content">
              <h2>John Doe's Bio</h2>
            <p><b>1914 translation by H. Rackham<b>
            <br>
"On the other hand, we denounce with righteous indignation and dislike men who are so beguiled and demoralized by the charms of pleasure of the moment, so blinded by desire, that they cannot foresee the pain and trouble that are bound to ensue; and equal blame belongs to those who fail in their duty through weakness of will, which is the same as saying through shrinking from toil and pain. These cases are perfectly simple and easy to distinguish. In a free hour, when our power of choice is untrammelled and when nothing prevents our being able to do what we like best, every pleasure is to be welcomed and every pain avoided. But in certain circumstances and owing to the claims of duty or the obligations of business it will frequently occur that pleasures have to be repudiated and annoyances accepted. The wise man therefore always holds in these matters to this principle of selection: he rejects pleasures to secure other greater pleasures, or else he endures pains to avoid worse pains."

</p>
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