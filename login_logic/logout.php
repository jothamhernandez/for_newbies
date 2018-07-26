<?php 
include_once("functions.php");
session_start();

if(!isLoggedIn($_SESSION)){
	header("location: index.php");
} else {
	session_destroy();	
}
echo "LOGGED OUT";

// YOU CAN PLACE REDIRECT HEADER HERE
 ?>


<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<a href="index.php">INDEX</a>
</body>
</html>