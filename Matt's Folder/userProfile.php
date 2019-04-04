<?php include('includes/logic/common_functions.php'); ?>

<?php
		if(isset($_GET['update']) && $_GET['update']=="name")
		{
			$full_name = trim(mysql_real_escape_string($_POST['full_name']));
			
			
			$errors = array();
			if(strlen($full_name)>50)
				$errors[] = "Your first name is too long";
			
				
			if(empty($errors))
			{
				if(updateFirstLastName($userData['id'],$full_name))
					echo "Updated!";
				else
					echo "An Error Has Occurred!";
			}
			else
				foreach($errors as $e)
					echo $e."<br />";
		}

		if(isset($_GET['update']) && $_GET['update']=="bio")
		{
			$bio = trim(mysql_real_escape_string($_POST['bio']));
			
			$errors = array();
			if(strlen($bio)>255)
				$errors[] = "Your bio is too long";
				
			if(empty($errors))
			{
				if(updatebio($userData['id'],$bio))
					echo "Updated!";
				else
					echo "An Error Has Occurred!";
			}
			else
				foreach($errors as $e)
					echo $e."<br />";
		}
	?>