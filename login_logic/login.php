<?php 
include_once("functions.php");
session_start();
if(!isLoggedIn($_SESSION)){
	$_SESSION['_chk'] = "JOTHAM";
	echo "LOGGED IN";
} else {
	header('location: index.php');
}
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