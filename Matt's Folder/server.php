<?php
// Server credentials so it's easy to change later
$servername = "localhost";
$login = "admin";
$password = " ";
$errors = array();

// Connecting to the actual database server
$database = new mysqli_connect($servername, $login, $password);

// Checking connection to prevent errors
if ($connect->connect_error) {
    die("Connection failed: " . $connect->connect_error);
} else {
    echo "Connected successfully";
}

// Registering the user
if (isset($_POST['reg_user'])) {

    // All values from input on the form
    $username = mysqli_real_escape_string($database, $_POST['username']);
    $email = mysqli_real_escape_string($database, $_POST['email']);
    $password = mysqli_real_escape_string($database, $_POST['password']);
    $password1 = mysqli_real_escape_string($database, $_POST['password1']);

    // Checking if username and email is unique
    $user_check_query = "SELECT * FROM Users WHERE Username='$username' OR email='$email' LIMIT 1";
    $result = mysqli_query($database, $user_check_query);
    $user = mysqli_fetch_assoc($result);

    if ($user) {
        // if user does exit
        if ($user['username'] == $username) {
            array_push($errors, "Username already exists");
        }

        if ($user['email'] == $email) {
            array_push($errors, "Email already exists");
        }
    }

    // If user and email are unique, add user to database
    if (count($errors) == 0) {
        $password = md5($password_1); // password encryption for later

        $query = "INSERT INTO Users (Username, Email, pass) VALUES('$username', '$email', '$password')";
        mysqli_query($database, $query);
        $_SESSION['username'] = $username;
        $_SESSION['success'] = "You are now logged in";

    }
}

// Logging in the user
if (isset($_POST['login_user'])) {
    $username = mysqli_real_escape_string($database, $_POST['username']);
    $password = mysqli_real_escape_string($database, $_POST['password']);
  
    if (empty($username)) {
        array_push($errors, "Username is required");
    }
    if (empty($password)) {
        array_push($errors, "Password is required");
    }
  
    if (count($errors) == 0) {
        $password = md5($password);
        $query = "SELECT * FROM Users WHERE Username='$username' AND pass='$password'";
        $results = mysqli_query($database, $query);
        if (mysqli_num_rows($results) == 1) {
          $_SESSION['username'] = $username;
          $_SESSION['success'] = "You are now logged in";
          header('location: index.php');
        }else {
            array_push($errors, "Wrong username/password combination");
        }
    }
  }
?>

