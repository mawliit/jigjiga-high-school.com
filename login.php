<?php
session_start();

if(isset($_POST['login'])) {
    // Database connection (replace with your actual credentials)
    $servername = "localhost"; // Or "127.0.0.1"
$username = "root"; // Default XAMPP username
$password = ""; // Default XAMPP password
$dbname = "project1";

// Create connection
$conn = new mysqli("localhost",  " root", "", "project1");

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $username = $_POST['username'];
    $password = $_POST['password'];

    // Prepare and execute the SQL query
    $stmt = $conn->prepare("SELECT * FROM users WHERE username = ? AND password = ?");
    $stmt->bind_param("ss", $username, $password); 
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        $_SESSION['logged_in'] = true; // Set session variable
        // Redirect to the inventory management dashboard
        header("Location: home.php"); 
        exit();
    } else {
        $error = "Invalid username or password.";
    }

    $stmt->close();
    $conn->close();
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>ussers - Login</title>
    <link rel="stylesheet" href="style.css"> 
</head>
<body>
    <h1> welcome to Jigjiga High School Inventory management page</h1>
    <h2>please login your user.</h2>
    <?php if(isset($error)): ?>
        <p style="color: red;"><?php echo $error; ?></p>
    <?php endif; ?>
    <form action="" method="post">
        <label for="username">Username:</label>
        <input type="text" name="username" required><br><br>
        <label for="password">Password:</label>
        <input type="password" name="password" required><br><br>
        <button type="submit" name="login">Login</button>
    </form>
</body>
</html>