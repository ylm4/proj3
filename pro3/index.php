<?php
//error_reporting(E_ALL);
//ini_set('display_errors',1);
include("username.user.php");
//require("db.php");
?>
<!DOCTYPE html>
<html>
<head>
<title>Welcome Home</title>
<link rel= "stylesheet" href="css/style.css" />
</head>
<body>
<p><a href="home.user.php">Dashboard</a>&nbsp|&nbsp<a
href="index.php">Profile</a>&nbsp|&nbsp<a href="users.user.php">Users</a>&nbsp|&nbsp<a
href="logout.user.php">Logout</a>
<h1><?php echo $_SESSION['username']; ?>'s Profile</h1>

<?php
if (isset($_POST['upload'])){
	$file_name= $_FILES['image']['name'];
	$file_name= $_FILES['image']['type'];
	$file_name= $_FILES['image']['size'];
	$file_tmp_name= $_FILES['image']['tmp_name'];

	if($file_name){
		move_uploaded_file($file_tmp_name,"images/$file_name");
	}
}

?>
	<form action="index.php" method="post" type=".jpq">
		<label>Upload Image</label><br>
		<input type="file" name="image"><br>
		<input type="submit" value"Upload Imaage" name="upload"> 

	</form>	

<?php
$folder ="images/";
if (is_dir($folder)) {
	if ($handle= opendir($folder)){
		while(($file=readdir($handle)) != false) {


		if($file==='.' || $file=== '..') continue;
		echo '<img src="images/'.$file.'" width="150" height="150" alt="">';
		
		}
		closedir($handle);
	}
}
?>
<p>Your homepage seems to be under construction.</p>

</div>

</body>
</html>
