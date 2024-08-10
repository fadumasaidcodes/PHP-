
<?php 

session_start(); 

	if($_SESSION['login'] != "OK") 
	{ 
		header('Location: loginform.php'); 
		exit(); 
	}

$deluser = isset($_POST["deluName"]) ? $_POST["deluName"]:''; 
$delPswd = isset ($_POST["deluPswrd"]) ? $_POST["deluPswrd"]:''; 

$mysqli = @mysqli_connect ("localhost", "root", "usbw") or die("Sorry - unable to connect to server.");

$rs = @mysqli_select_db ($mysqli, "sitelogin") or die ("error, failure to connect to the database. ");

// add code to here delete the data 

$sql= "DELETE FROM user WHERE username = '$deluser' AND password = '$delPswd' "; 

 mysqli_query($mysqli, $sql) or die ("User deletion has failed.");  
 
 echo "<p>Successfully deleted the username and password.</p>";  
 
 echo "<p><a href='loginform.php'>Return to login form</a></p>";  
 
 ?> 
 
