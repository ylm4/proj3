
<!DOCTYPE html>
<html>
<head>
<title>Registration</title>
<link rel="stylesheet" href="css/style.css" />

</head>
<body>
<?php
require('db.php');

//new info entering--delete if code doesnt work


//end of new info entering


if (isset($_REQUEST['username'])){
	$username = stripslashes($_REQUEST['username']); 
	$username = mysqli_real_escape_string($con,$username); 
	$email = stripslashes($_REQUEST['email']);
	$email = mysqli_real_escape_string($con,$email);
	$password = stripslashes($_REQUEST['password']);
	$password = mysqli_real_escape_string($con,$password);
       	$password2= stripslashes($_REQUEST['password2']);
	$password2= mysqli_real_escape_string($con,$password2);
	//passwords need to match to create user
	if ($password == $password2 && !empty($username) && !empty($email)){
		//edit
		
		$query = "INSERT into `user_info` (username, password, email) VALUES ('$username', '".md5($password)."', '$email')";
        	$result = mysqli_query($con,$query);}
	else {
		echo "<center><b>Error: Please check that your passwords match and that you
		haven't left any blank fields.</b><br><a href='register.user.php'>Try Again.</a></center>";}
		if($result){
           		echo "<div class='form'><h3>You are registered successfully.</h3><br/>Click here to <a href='login.user.php'>Login</a></div>";
        }
    }else{
?>

<a href="home.user.php">Home</a>&nbsp|&nbsp<a href="users.user.php">Users</a>&nbsp|&nbsp<a
href="index.php">Profile</a>
<div class="form">
<h1><center> Sign Up</center></h1>
<form name="registration" action="" method="post">
<input type="text" name="username" placeholder="Username" require/>
<input type="email" name="email" placeholder="Email" require/>
<input type="password" name="password" placeholder="Password" require/>
<input type="password" name="password2" placeholder="Confirm Password"
require/>
<center><input type="submit" name="submit" value="Register" /></center>
</form>
<center><p>Have an Account with us? <a href='login.user.php'>Log
In</a></p></center>
</div>
<?php } ?>
</body>
</html>
