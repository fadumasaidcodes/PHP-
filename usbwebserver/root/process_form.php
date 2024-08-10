<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['login'])) {
        // Handle login form submission
        $username = $_POST['uName'];
        $password = $_POST['pWord'];

        // For demonstration purposes; replace with actual authentication logic
        echo "<p class='feedback'>Login submitted with Username: $username</p>";
    }
} elseif ($_SERVER["REQUEST_METHOD"] == "GET" && isset($_GET['search'])) {
    // Handle search form submission
    $query = $_GET['user_query'];
    echo "<p class='feedback'>Search submitted with Query: $query</p>";
}
?>



