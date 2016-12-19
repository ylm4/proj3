<?php

session_start();
if(session_destroy()){
	
?>
<!DOCTYPE html>
<html>
<title>Signed Out</title>
<link rel="stylesheet" href="css/style.css" />
</head>
<body>
<p><a href="register.user.php">Register</a>&nbsp|&nbsp<a href="login.user.php">Login</a>
<br><br>
<br>
<br>
<center><h2>You Have Successfully Signed Out</h2></center>

</body>
</html>
<?php }
?>
