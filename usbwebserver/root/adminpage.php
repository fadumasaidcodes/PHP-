<?php 

session_start(); 
	if
	($_SESSION['login'] != "OK") 
		{ 
			header('Location: loginform.php'); 
			exit(); 
		} 
?> 

<html> 
	<head>
	
	</head>
 

	<body>

	<img src="adminlogo.png">	
	
	<?php
	
	if
	($_SESSION['username'] == 'admin') 
	
	{ 
	echo "<p><a href='createuser.php'>Create a new user</a></p>"; 
	}
		
		
		echo "<p><a href='hiddenpage.php'>See hidden page</a></p>"; 
		echo "<p><a href='loginform.php'>Return to login page</a></p>"; 		
	?>	
	

		
		
	</body>
</html>