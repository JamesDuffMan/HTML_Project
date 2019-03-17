<?php
$hostname="localhost";
$db="group03";
$Username="username";
$Password="Password";

$conn=new PDO("mysql:host=$hostname;dbname=$db",$Username,$Password);
$sql="select SeekingGender from Preferences"; 

try
{
	$stmt=$cone->prepare($sql);
	$stmt->execute();
	$results->$stmt->fetchAll();
}
catch(Exception $ex)
{
	echo($ex-> getMessage());
}
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-multiselect/0.9.15/css/bootstrap-multiselect.css" type="text/css"/>

    <title>Multiselect test</title>
  </head>
  <body>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-multiselect/0.9.15/js/bootstrap-multiselect.js"></script>
	<center>
	<h1>Mowie</h1>
	<h2>Multiselect Gender Test</h2>
	<hr/>
	<script id="text/javascript">
	$(function() {
		$('#selectGender').multiselect({
			includeSelectAllOption:true;
		});
	});
	<script>
	<label>Please Select Gender</label>
	<select id="selectGender" multiple="multiple">
	<?php foreach($results as $output) {?>
	<option>
	<?php echo $output["SeekingGender"];?>
	</option>
	<?php?\}>
	</select>
	</center>
  </body>
</html>