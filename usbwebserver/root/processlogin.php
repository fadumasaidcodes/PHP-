<?php 
$user = isset($_POST['uName']) ? $_POST['uName']:'';  
$pass = isset($_POST["pWord"]) ? $_POST['pWord']:'';
$validated = false; 
session_start(); 
$_SESSION['login'] = ""; 

if($user!="" && $pass!="") 
{ 

$host = "localhost";
$username = "root";
$user_pass = "usbw";
$database_in_use = "sitelogin";

$mysqli = new mysqli("$host", "$username", "$user_pass", "$database_in_use");

if ($mysqli->connect_errno) {
    echo "Failed to connect to MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
}
echo $mysqli->host_info . "<br>";

$sql = "SELECT * FROM userlogin WHERE username = '$user' AND password = '$pass'";  

$rs = mysqli_query($mysqli,$sql); 
$result = mysqli_num_rows($rs); 

if ($result > 0) 
	$validated = true;
$mysqli->close();


if($validated)
{ 
$_SESSION['login'] = "OK"; 
$_SESSION['username'] = $user; 
$_SESSION['password'] = $pass; 

header('Location: adminpage.php'); 
} else { $_SESSION['login'] = ""; 

echo "Invalid username or password."; 
echo "<p><a href='loginform.php'>Return to login page</a></p>"; 
} 

} 

else $_SESSION['login'] = ""; 


?>
