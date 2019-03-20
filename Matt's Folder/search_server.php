<?php
// Server credentials so it's easy to change later
$servername = "localhost";
$login = "admin";
$password = " ";
$errors = array();

// Conneting to the actual database server
$database = new mysqli_connect($servername, $login, $password);

// Checking connection to prevent errors
if ($connect->connect_error) {
    die("Connection failed: " . $connect->connect_error);
} else {
    echo "Connected successfully";
}

// Checking for Search button to be pressed
if (isset($_POST['beard_search'])) {
    
    // Values from form
    $nameOfUser = $_POST["name_user"];

    $name_check_query = "SELECT * FROM Profile WHERE Name LIKE '%$nameOfUser%'";
    $result = $database->query($sql);

    if ($result->num_rows > 0) {
        // output data of each row
        while($row = $result->fetch_assoc()) {
            echo $row["Name"];
        }
    } else {
        echo "0 results";
    }


}
?>
