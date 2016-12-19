<!DOCTYPE html>
<html>
<head><title>Users in Database</title>
<link rel="stylesheet" href="css/style.css" />

</head>

<body>

<a href="home.user.php">Home</a>&nbsp|&nbsp<a href="users.user.php">Users</a>&nbsp|&nbsp<a
href="index.php">Profile</a>

<br><br><br>
<br><br><br>
<center>
<?php
//require('db.php');
//wont work when I try to connect with database file

//reconnecting
$servername="sql2.njit.edu";
$username="ylm4";
$password="fc7Tp7jW";
$dbname="ylm4";

$con= mysql_connect($servername,$username,$password,$dbname);
mysql_select_db($dbname,$con);

//if ($con->connect_error){
//	die("connection failed: " .$con->connect_error);
//}

//$users = $con;
//mysql_select_db('ylm4',$users);
$query= "SELECT *  FROM user_info";
$results= mysql_query($query,$con);
echo "<h2>Users in Database</h2>";

echo "<table>";
echo "<tr><td><b>Users</b></td><td><b>Passwords(hashed)</b></td><td><b>Email</b></td>";

while ($row=mysql_fetch_array($results)) {
	echo "<tr>";
	echo "<td>" .$row[username]."</td>";
	echo "<td>" .$row[password]."</td>";
	echo "<td>" .$row[email]."</td>";
}
echo "</table>";
?>
</center>
</body>
</html>
