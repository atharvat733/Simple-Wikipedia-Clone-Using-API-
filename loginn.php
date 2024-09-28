<?php
session_start();
require_once 'db.php';

$email = $_POST['email'];
$password = $_POST['password'];

$sql = "SELECT id, password FROM users WHERE email =?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("s", $email);
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    if ($password == $row['password']) {
        $_SESSION['user_id'] = $row['id'];
        // Set the cookie to expire in 1 hour
        $expire = time() + 3600;
        // Set the cookie value to "true"
        setcookie("isLoggedIn", "true", $expire);
        header('Location: index1.php');
        exit;
    } else {
        echo "<script>alert('Invalid password')</script>";       
    }

} else {
    echo "<script>alert('User not found')</script>";
}

$stmt->close();
$conn->close();
?>