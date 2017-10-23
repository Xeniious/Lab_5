<?php
$mysqli = new mysqli("mysql.eecs.ku.edu", "csmith", 'P@$$word123', "csmith");

$users = $mysqli->query("SELECT user_id FROM Users");

if($users->num_rows>0)
{
	while($data = $users->fetch_array())
	{
		echo "
			<table>
			<tr>
				<td>".$data['user_id']."</td>
			</tr>
			";
	}
}
else
{
	echo "There are currently no users";
}

$mysqli->close();
?>