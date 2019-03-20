<!DOCTYPE html>
<html>
<head>
	<title>Mowie</title>
	  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Mowie</title>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <!-- Bootstrap -->
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="css/font-awesome.min.css">
  <link href="css/animate.min.css" rel="stylesheet">
  <link href="css/animate.css" rel="stylesheet" />
  <link href="css/style.css" rel="stylesheet">
    </head>
<body>

<?php
// Server credentials so it's easy to change later
$servername = "localhost";
$username = "admin";
$password = " ";
// Conneting to the actual database server
$connect = new mysqli($servername, $username, $password);
// Checking connection to prevent errors
if ($connect->connect_error) {
    die("Connection failed: " . $connect->connect_error);
} else {
    echo "Connected successfully";
}

// The sql to find the relevant search information
$sql_user = "";
$sql_email = "";
$sql_password = "";
$sql_password = "";

$result = $connect->query($sql);

// Checking to see if there are results present
if ($result->num_rows > 0) {
    // Output the data requested
    while ($row = $result->fetch_assoc()) {
        // Echo all the relevant rows 
        echo ""
    }
} else {
    echo "0 results";
}
?>

<header>
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
              <li><a href="#signup">Sign Up</a></li>
            </ul>
          </div>
          <!-- /.Navbar-collapse -->
        </div>
      </div>
      <!-- /.container -->
    </nav>
  </div>
	</header>
	<div id="clear"></div>
	<br>
	<br>
	<div class="container" style="width: 30rem;">
	


            <form id='register' action='register.php' method='post' 
            accept-charset='UTF-8'>
        <fieldset >
		
         <h2>Register New User</h2>
			
        <input type='hidden' name='submitted' id='submitted' value='1'/>
		
		<label for='username' >UserName:</label><br>
        <input type='text' name='username' id='username' maxlength="50" required/>

       
        <br>
        <label for='age'>Enter your age:</label><br>
      
        <input type="number" max="100" min="18" name="age" required>
        <br>
        <label for='email' >Email Address:</label><br>
        
        <input type='text' name='email' id='email' maxlength="50" required />
        <br>

        <label for='password' >Password:</label><br>
        <input type='password' name='password' id='password' minlength ="8" maxlength="50" required/>

            
        <br><br>
        
        
       
        

    
          <br> <p1>Please select your preferred gender(s)!</p>
            <div id="checkboxes">
                    <div class="checkboxgroup">
                        <label for="Female">Female</label>
                        <input type="checkbox" name="gender" id="gender" />
                    </div>
                    <div class="checkboxgroup">
                        <label for="Male">Male</label>
                        <input type="checkbox" name="gender" id="gender" />
                    </div>
                   
            </div>
            <br><div class="text-center"><button type="submit" class="btn btn-primary btn-lg">Submit</button><button type="reset" class="btn btn-primary btn-lg">Reset</button></div><br>
        </fieldset>
    </form> 

	</div>
	
    
    <script type='text/javascript'>
        // <![CDATA[
            var pwdwidget = new PasswordWidget('thepwddiv','password');
            pwdwidget.MakePWDWidget();
            
            var frmvalidator  = new Validator("register");
            frmvalidator.EnableOnPageErrorDisplay();
            frmvalidator.EnableMsgsTogether();
            frmvalidator.addValidation("name","req","Please provide your name");
            frmvalidator.addValidation("email","req","Please provide your email address");
            frmvalidator.addValidation("email","email","Please provide a valid email address");
            frmvalidator.addValidation("username","req","Please provide a username");
            
            frmvalidator.addValidation("password","req","Please provide a password");
        // ]]>
        </script>

	<div id="clear"></div>
	
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
	  <script src="js/jquery-2.1.1.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/wow.min.js"></script>
  <script src="js/jquery.easing.min.js"></script>
  <script src="js/functions.js"></script>
  <script src="contactform/contactform.js"></script>
<?php 
    $connect->close();
?>
  </body>
</html>