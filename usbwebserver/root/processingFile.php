
<?php

$target_path = "compImages/";
$target_path = $target_path . basename( $_FILES['petImages']['name']); 

if(
move_uploaded_file($_FILES['petImages']['tmp_name'], $target_path)) {
    
	echo "The photo ".  basename( $_FILES['petImages']['name']). 
    " has been uploaded";
	
	header('Refresh: 3; url=competition.php');
} 

else{
    echo "There was an error uploading the photo, please try again!";
}
?>