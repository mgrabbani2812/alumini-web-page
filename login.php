<?php
session_start(); // Start or resume a session

$servername = "localhost";
$username = "root";
$password = "";
$database = "qu_miniproject";

// Create a connection
$conn = mysqli_connect($servername, $username, $password, $database);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

if (isset($_POST['login_id']) && isset($_POST['login_password'])) {
    $login_id = $_POST['login_id'];
    $login_password = $_POST['login_password'];

    // Query the database to check if the user exists
    $sql_query = "SELECT * FROM users WHERE email='$login_id' AND password='$login_password'";
    $result = mysqli_query($conn, $sql_query);

    if (mysqli_num_rows($result) == 1) {
        // User is found, store user information in session
        $user = mysqli_fetch_assoc($result);
        $_SESSION['user_id'] = $user['id'];
        $_SESSION['user_name'] = $user['name'];

        // Redirect to the index page
        header("Location: index.php");
        exit();
    } else {
        // Login failed, display an error message on the same page
        echo "Login failed. Please check your credentials.";
    }
}

mysqli_close($conn);
?>


<!DOCTYPE html>
<html lang="en">
<style>
    body {
    font-family: Arial, sans-serif;
    background-color: #f0f0f0;
    margin: 0;
    padding: 0;
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
}

.welcome-message {
    text-align: center;
    background-color: #ffffff;
    padding: 20px;
    border-radius: 10px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
}

h1 {
    color: #333;
    font-size: 36px;
}

p {
    color: #666;
    font-size: 18px;
}

</style>    
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="welcome-message">
        <h1>Welcome to Our Website</h1>
        <p>We are excited to have you here!</p>
    </div>
    <script>
        setTimeout(function() {
            window.location.href = 'index.php';
        }, 5000); // 10 seconds (10000 milliseconds)
    </script>
</body>
</html>


