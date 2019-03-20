<?php
// Server credentials so it's easy to change later
$servername = "localhost";
$login = "admin";
$password = " ";
$errors = array();

// Conneting to the actual database server
$database = new mysqli($servername, $login, $password);

// Checking connection to prevent errors
if ($database->connect_error) {
    die("Connection failed: " . $database->connect_error);
} else {
    echo "Connected successfully";
}

// Checking for Search button to be pressed
if (isset($_POST['beard_search'])) {
    
    if ($_POST['name_user'] == 0) {
        // Variables needed
        $gender = $_POST['Gender'];
        $relationship = $_POST['Relationship'];
        $beard = $_POST['BeardBar'];
        $length = $_POST['Length'];



    } else {
        // Values from form
        $nameOfUser = $_POST["name_user"];

        // Usage of LIKE allows for user-error
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


}
?>
