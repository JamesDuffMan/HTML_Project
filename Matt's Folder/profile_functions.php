<?php

function getUserData($user_id) {
    global $conn;
    $sql = "SELECT * FROM 'users' WHERE 'id'=".$user_id;
    $array = array();

    while($r = mysql_fetch_assoc($sql)) {
        $array['id'] = $row['id'];
        $array['username'] = $row['username'];
        $array['email'] = $row['email'];
        $array['password'] = $row['password'];
        $array['full_name'] = $row['full_name'];
        $array['age'] = $row['age'];
        $array['gender'] = $row['gender'];
        $array['motto'] = $row['motto'];
        $array['bio'] = $row['bio'];
        $array['looking_for'] = $row['looking_for'];
    }
    return $array;
}
?>