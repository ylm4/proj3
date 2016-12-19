<?php
 
require('db.php');
include("username.user.php"); 

?>
<!DOCTYPE html>
<html>
<head>
<title>Dashboard (Secured)</title>
<link rel="stylesheet" href="css/style.css" />
</head>
<body>
<p><a href="home.user.php">Dashboard</a>&nbsp|&nbsp<a href="users.user.php">Users</a>&nbsp|&nbsp<a href="index.php">Profile</a>&nbsp|&nbsp<a
href="logout.user.php">Logout</a>
<div class="formh">
<p></p>
<br><br>
<br><br>
<br><br>
<h2>Welcome to kcKBx <?php echo $_SESSION['username']; ?>!</h2>

</div>
</body>
</html>
