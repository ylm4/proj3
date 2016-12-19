<?php
//will be used to retrieve user's username for their profile
session_start();
if(!isset($_SESSION["username"])){
header("Location: login.user.php");
exit(); }
?>
