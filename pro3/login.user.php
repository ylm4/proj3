<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Login</title>
<link rel="stylesheet" href="css/style.css" />
</head>
<body>
<?php
require('db.php');
session_start();
if (isset($_POST['username'])){
	$username = stripslashes($_REQUEST['username']); 
	$username = mysqli_real_escape_string($con,$username);
	$password = stripslashes($_REQUEST['password']);
	$password = mysqli_real_escape_string($con,$password);
//if user has an account it will search in database
        $query = "SELECT * FROM `user_info` WHERE username='$username' and password='".md5($password)."'";
	$result = mysqli_query($con,$query) or die(mysql_error());
	$rows = mysqli_num_rows($result);
        if($rows==1){
		$_SESSION['username'] = $username;
		//will sned user to home then user should click on Profile or Users to view users on dtb
		header("Location: home.user.php"); 
            //if we cant find user in our database
	}else{
		echo "<div class='form'><h3>Sorry, your information is not in our database</h3><br/>Please <a href='login.user.php'>Login</a> <br/> or <a href='register.user.php'>Sign Up</a></div>";
	}
}else{
?>
<a href="home.user.php">Home</a>&nbsp|&nbsp<a href="users.user.php">Users</a>&nbsp|&nbsp<a
href="index.php">Profile</a>

<div class="form">
<h1><center>Log In</center></h1>
<form action="" method="post" name="login">
<input type="text" name="username" placeholder="Username" required />
<input type="password" name="password" placeholder="Password" required />
<center><input name="submit" type="submit" value="Login" /></center>
</form>
<center><p>Don't have an Account with us? <a
href='register.user.php'>Register</a></p></center>

</div>
<?php }
?>



</body>
</html>
