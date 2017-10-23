<?php
$mysqli = new mysqli("mysql.eecs.ku.edu", "csmith", 'P@$$word123', "csmith");

if ($mysqli->connect_errno) {
    printf("Connect failed: %s\n", $mysqli->connect_error);
    exit();
}
$userid =  $_POST["username"];
$content = $_POST["post"];
$doesExist = "SELECT user_id FROM Users WHERE EXISTS user_id=$userid";

if($userid == "")
{
    echo "The username cannot be blank.";
}
else if(!$doesExist)
{
    echo "This username does not exist";
}
else if($content = "")
{
    echo "The post cannot be blank";
}
else
{
    $query = "INSERT INTO Posts (content, author_id)
    VALUES ($content, $userid)";
}
$mysqli->close();
?>
