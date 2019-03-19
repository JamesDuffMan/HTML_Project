<!DOCTYPE html>
<html>
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
$sql = "";
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


<?php 
    $connect->close();
?>

</body>
</html>
