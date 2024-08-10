<?php 
session_start(); 

if($_SESSION['login'] != "OK") 

{ 
header('Location: loginform.php'); 
exit(); 
} ?> 


<html>
<body>
<form method="post" action="editLoginDetails.php">

<label for "Username">Username:</label>
<input type="text" id="uName" name="uName" /> <br/><br/>

<label for "Password">Password:</label>
<input type="text" id="Password" name="pWord" /> <br/><br/>

<label for "New Username">New Username:</label>
<input type="text" id="newUsername" name="newUsername" /> <br/><br/>

<label for "newPassword">New Password:</label>
<input type="text" id="newPassword" name="newPassword" /> <br/><br/>


<input type="submit" value="Edit Details" name="editDetails" />

</form>
</body>
</html>
