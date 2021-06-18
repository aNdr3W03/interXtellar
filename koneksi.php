<?php
	$host = "localhost";
	$user = "root";
	$pass = "";
	$db   = "interxtellar";
    
	$con  = mysqli_connect($host, $user, $pass) or die ("<center style='padding: 5vh'><h1>Cannot Connect to Server Database!</h1><br><h2>Cause: ".mysqli_connect_error()."</h2></center>");

	mysqli_select_db($con, $db) or die ("<center style='padding: 5vh'><h1>Database Not Found!</h1></center>");
?>
