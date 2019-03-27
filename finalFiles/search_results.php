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
        <link href="search_style.css" rel="stylesheet">
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
  <br>
    <div class="container">
        <hgroup class="margin-bottom-20">
            <h1>Search Results</h1>
            <h2 class="lead"><strong class="text-danger">3</strong> results were found for the search for <strong class="text-danger">Stephanie</strong></h2>
        </hgroup>

        <section class="col-lg-12">
            <article class="search-result row">
                <div class="col-lg-2">
                    <a href="#" title="stepahanie" class="profile-pic" class="img-responsive img-circle"><img src="data:image/jpeg;base64,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" alt="stephanie"></a>  
                </div>
                <div class="col-lg-2">
                    <ul class="search-info">
                        <li><i class="glyphicon glyphicon-heart"></i><span> Single</span></li>
                        <li><i class="glyphicon glyphicon-calendar"></i><span> 27</span></li>
                        <li><i class="glyphicon glyphicon-user"></i><span> no beard</span></li> 
                    </ul>
                </div>
                <div class="col-lg-8">
                    <h3><a href="#" title="stephanie">Stephanie Johnson</a></h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatem, exercitationem, suscipit, distinctio, qui sapiente aspernatur molestiae non corporis magni sit sequi iusto debitis delectus doloremque.</p>
                    <div class="searchButtons">
                        <button class="btn btn-success btn-sm">Save</button>
                        <button class="btn btn-danger btn-sm">Shave</button>
                    </div>
                    <span class="cleafix borda"></span>
                </div>
            </article>
        </section>
    </div>

    <br>

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
  <script src="//netdna.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js"></script>
  <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
  
</body>

</html>