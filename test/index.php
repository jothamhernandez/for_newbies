<?php 
include_once("functions.php");
session_start();
if(isLoggedIn($_SESSION)){
	echo "LOGGED IN";
} else {
	echo "LOGGED OUT";
}
 ?>
 <!DOCTYPE html>
 <html lang="en">
 <head>
 	<meta charset="UTF-8">
 	<title>Document</title>
 </head>
 <body>
 	<?php if(!isLoggedIn($_SESSION)){ ?>
 		<a href="login.php">LOGIN</a>
 	<?php } else { ?>
 		<a href="logout.php">LOGOUT</a>
 	<?php } ?>
 </body>
 </html>