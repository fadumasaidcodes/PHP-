<html> 
<body> 

<?php 

session_start(); 

	if($_SESSION['login'] != "OK") 
	{ 
		header('Location: loginform.php'); 
		exit(); 
	}

$newuser = isset($_POST["uName"]) ? $_POST["uName"]:''; 
$newPswd = isset ($_POST["pWord"]) ? $_POST["pWord"]:''; 
$updateuser = isset ($_POST["newUsername"]) ? $_POST["newUsername"]:'';  
$updatePswd = isset ($_POST["newPassword"]) ? $_POST["newPassword"]:''; 

$host = "localhost";
$username = "root";
$user_pass = "usbw";
$database_in_use = "sitelogin";

$mysqli = new mysqli("$host", "$username", "$user_pass", "$database_in_use");

if ($mysqli->connect_errno) {
    echo "Failed to connect to MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
}
echo $mysqli->host_info . "<br>";

$sql= "UPDATE userlogin SET username = '$updateuser', password = '$updatePswd'  WHERE username = '$newuser' AND password = '$newPswd' "; 

mysqli_query($mysqli,$sql) 
 or die ("User creation failed.");  
 
 echo "<p>Successfully updated the username and password.</p>";  
 
 echo "<p><a href='loginform.php'>Return to login form</a></p>";  
$mysqli->close();
 ?> 

 </body> 
 </html>