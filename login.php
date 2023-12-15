<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Assuming you have a database connection
    require('db_connection.php'); // Include your database connection file

    $username = $_POST['username'];
    $password = $_POST['password'];

    // Implement your authentication logic here
    // Example: Authenticate against a users table in your database
    $query = "SELECT UserID, Username, Password FROM users WHERE Username = ?";
    $stmt = mysqli_prepare($conn, $query);
    mysqli_stmt_bind_param($stmt, "s", $username);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_bind_result($stmt, $userID, $dbUsername, $hashedPassword);
    mysqli_stmt_fetch($stmt);

    if (password_verify($password, $hashedPassword)) {
        $_SESSION['userID'] = $userID; // Set session variable
        header("Location: home.php"); // Redirect to home page
        exit();
    } else {
        echo "Invalid login credentials. Please try again.";
    }

    // Close database connection
    mysqli_close($conn);
}
?>
