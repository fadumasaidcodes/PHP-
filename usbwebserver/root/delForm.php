<?php 
session_start(); 

if($_SESSION['login'] != "OK") 

{ 
header('Location: loginform.php'); 
exit(); 
} ?> 


<html>
<body>
<form method="post" action="delLoginDetails.php">

<label for "Username">Username:</label>
<input type="text" id="uName" name="deluName" /> <br/><br/>

<label for "Password">Password:</label>
<input type="text" id="Password" name="deluPswrd" /> <br/><br/>


<input type="submit" value="Delete Details" name="delDetails" />

</form>
</body>
</html>
