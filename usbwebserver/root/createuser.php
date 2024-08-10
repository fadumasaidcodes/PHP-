<?php 
session_start(); 

if($_SESSION['login'] != "OK") // if the login session is NOT ok 

{ 
header('Location: loginpage.php'); // return the user to the login page
exit(); 
} ?> 

<html> 
<body> 
<h1>Create a new user</h1> 
<p>Please enter details for the new user:</p>

<form action="addnew.php" method="post"> 

New Username: <input type="text" size="20" maxlength="15" name="new_username">

New Password: <input type="password" size="20" maxlength="15" name="new_password">
<input type="submit" value="Create new user">

 </form> 
 </body> 
 </html>