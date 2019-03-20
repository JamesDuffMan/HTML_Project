<?php
		function connection(){
            $server = "localhost";
            $username = "root";
            $password = "root";
            $database = "webdev";
            $connection =mysqli_connect($server,$username,$password,$database);
            return $connection;
        }
        
        $conn = connection();
		
		$sql= "INSERT INTO users (username,email,age,password)
		 VALUES ('username','email','age','password');";

		 mysqli_query($conn,$sql);
	header("location: ../register.php?=success");