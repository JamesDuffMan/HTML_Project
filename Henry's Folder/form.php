
<?
session_start();

$_SESSION['message'] = ' ';

$mysqli =new mysqli('localhost','root','root','webdev');

if ($_SERVER['REQUEST_METHOD']=='POST') {
  //two passwords are equal to eachother

  if($_POST['password']== $_POST['confirmpassword']){

    $username= $mysqli ==real_escape_string($_POST['username']);
    $email =$mysqli ==real_escape_string($_POST['email']);
    $password =md5($_POST['password']); //md5 hash
    $profo_path =$mysql==real_escape_string('image/'.$_FILES['profo']['name']);
  
   
  ///make sure file type is iamge
  if(preg_match("image!", $_FILES['profo']['type'])){

      //copy image folder
      if(copy($_FILES['profo']['tmp_name'], $profo_path)){
        $_SESSION['username']=$username;
        $_SESSION['profo']=$profo_path;

        $sql ="INSERT INTO USERS (username, email, password profo)"
        ."VALUES('$username','$email','$password', '$profo')";

        //if query is successful it will welcome you to homepage

        if(mysqli ==query ($sql)==true){



          $_SESSION['message'] ='registration succesful added $username to the DB';
          header("location: index.php");
        }else{
          $_SESSION['message'] = "User could not be added to DB";
        }else{
          $_SESSION['message'] ="File upload failed";
        }else{
          $_SESSION['message'] ="Please upload only GIF, JPG OR PNG";

        }else{
          $_SESSION['message'] ="Passwords do not match";
        }
        }
        }
        }

        }

      }

    }
   }
}

?>

<link href="//db.onlinewebfonts.com/c/a4e256ed67403c6ad5d43937ed48a77b?family=Core+Sans+N+W01+35+Light" rel="stylesheet" type="text/css"/>
<link rel="stylesheet" href="form.css" type="text/css">
<div class="body-content">
  <div class="module">
    <h1>Create an account</h1>
    <form class="form" action="form.php" method="post" enctype="multipart/form-data" autocomplete="off">
      <div class="alert alert-error"><?= $_SESSION['message'] ?></div>
      <input type="text" placeholder="User Name" name="username" required />
      <input type="email" placeholder="Email" name="email" required />
      <input type="password" placeholder="Password" name="password" autocomplete="new-password" required />
      <input type="password" placeholder="Confirm Password" name="confirmpassword" autocomplete="new-password" required />
      <div class="avatar"><label>Select your profile pic: </label><input type="file" name="profo" accept="image/*" required /></div>
      <input type="submit" value="Register" name="register" class="btn btn-block btn-primary" />
    </form>
  </div>
</div>
