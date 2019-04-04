<?php

require("dbc.php");

function getUsersData($id)
{
	$array = array();
	$q = mysql_query("SELECT * FROM `users` WHERE `id`=".$id);
	while($r = mysql_fetch_assoc($q))
	{
		$array['id'] = $r['id'];
		$array['username'] = $r['username'];
		$array['password'] = $r['password'];
		$array['firstname'] = $r['firstname'];
		$array['lastname'] = $r['lastname'];
		$array['profileext'] = $r['profileext'];
		$array['aboutme'] = $r['aboutme'];
		$array['birthday'] = $r['birthday'];
		$array['country'] = $r['country'];
		$array['city'] = $r['city'];
	}
	return $array;
}

function getId($username)
{
	$q = mysql_query("SELECT `id` FROM `users` WHERE `username`='".$username."'");
	while($r = mysql_fetch_assoc($q))
	{
		return $r['id'];
	}
}

function userExists($id)
{
	$numrows = mysql_num_rows(mysql_query("SELECT `id` FROM `users` WHERE `id`=".$id));
	if($numrows==1)
		return true;
	else
		return false;
}

function updateFirstLastName($id,$firstName,$lastName)
{
	if(mysql_query("UPDATE `users` SET `firstname`='".$firstName."', `lastname`='".$lastName."' WHERE `id`=".$id))
		return true;
	else
		return false;
}

function updateAboutMe($id,$aboutMe)
{
	if(mysql_query("UPDATE `users` SET `aboutme`='".$aboutMe."' WHERE `id`=".$id))
		return true;
	else
		return false;
}

function updateCountryCity($id,$country,$city)
{
	if(mysql_query("UPDATE `users` SET `country`='".$country."', `city`='".$city."' WHERE `id`=".$id))
		return true;
	else
		return false;
}

function updateBirthday($id,$birthday)
{
	if(mysql_query("UPDATE `users` SET `birthday`=".$birthday." WHERE `id`=".$id))
		return true;
	else
		return false;
}

function updateProfilePicture($id,$tmpName,$ext)
{
	if(move_uploaded_file($tmpName,"images/userimages/".$id.".".$ext) && mysql_query("UPDATE `users` SET `profileext`='".$ext."' WHERE `id`=".$id))
		return true;
	else
		return false;
}

function resetProfilePicture($id,$ext)
{
	if(unlink("images/userimages/".$id.".".$ext) && mysql_query("UPDATE `users` SET `profileext`='n/a' WHERE `id`=".$id))
		return true;
	else
		return false;
}

?>