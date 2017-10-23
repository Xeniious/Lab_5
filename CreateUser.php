<?php
$mysqli = new mysqli("mysql.eecs.ku.edu", "csmith", 'P@$$word123', "csmith");

$userid =  $_POST["username"];
$doesExist = "SELECT user_id FROM Users WHERE EXISTS user_id=$userid";

if($userid == "")
{
    echo "The username cannot be blank.";
}
else if($mysqli->query($doesExist))
{
    echo("This username already exists");
}
else
{
	$query = "INSERT INTO Users (user_id) VALUES ($userid)";
	$mysqli->query($query);
}
$mysqli->close();
?>
