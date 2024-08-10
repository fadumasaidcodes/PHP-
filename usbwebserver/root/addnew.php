<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create New User</title>
</head>
<body>
    <img src="createnew.png" alt="Create New User">    

    <?php 
    session_start(); 
    
    if ($_SESSION['login'] != "OK") { 
        header('Location: loginform.php'); 
        exit(); 
    }

    $new_user = $_POST["new_username"] ?? '';
    $new_pass = $_POST["new_password"] ?? '';

    $host = "localhost";
    $username = "root";
    $user_pass = "usbw";
    $database_in_use = "sitelogin";

    // Create a new mysqli object
    $mysqli = new mysqli($host, $username, $user_pass, $database_in_use);

    // Check connection
    if ($mysqli->connect_errno) {
        echo "Failed to connect to MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
        exit();
    }

    // Prepare and bind
    $stmt = $mysqli->prepare("INSERT INTO userlogin (username, password) VALUES (?, ?)");
    if (!$stmt) {
        echo "Prepare failed: (" . $mysqli->errno . ") " . $mysqli->error;
        exit();
    }

    // Hash the password
    $hashed_password = password_hash($new_pass, PASSWORD_DEFAULT);

    // Bind parameters
    $stmt->bind_param("ss", $new_user, $hashed_password);

    // Execute the statement
    if ($stmt->execute()) {
        echo "<p>User created successfully.</p>";
    } else {
        echo "User creation failed: (" . $stmt->errno . ") " . $stmt->error;
    }

    // Close statement and connection
    $stmt->close();
    $mysqli->close();
    ?>

    <p>Return to <a href="loginform.php">Login form</a></p>
</body>
</html>
