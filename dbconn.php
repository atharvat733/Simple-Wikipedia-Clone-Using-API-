<?php
// Database connection settings
$servername = "localhost";
$username = "root"; // Default username for XAMPP MySQL
$password = ""; // Default password for XAMPP MySQL
$database = "login_system"; // Your database name

// Create connection
$conn = mysqli_connect($servername, $username, $password, $database);

// Check connection
if ($conn) {
    echo"sucess";
}
else{
    die("Connection failed: " . mysqli_connect_error());
}



// Login user
if (isset($_POST['signin'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM users WHERE email='$email'";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);
        if (password_verify($password, $row['password'])) {
            echo "Login successful";
            // Start session and redirect user to dashboard
            session_start();
            $_SESSION['user_id'] = $row['id'];
            header("Location:index1.html"); // Change to your dashboard page
        } else {
            echo "Invalid password";
        }
    } else {
        echo "User not found";
    }
}

// Close connection
mysqli_close($conn);
?>
