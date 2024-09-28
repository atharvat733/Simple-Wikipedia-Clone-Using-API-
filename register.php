<?php
require_once 'db.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password =$_POST['password'];

    

    // Check if user already exists
    $sql_check = "SELECT COUNT(*) FROM users WHERE email = ?";
    $stmt_check = $conn->prepare($sql_check);
    $stmt_check->bind_param("s", $email);
    $stmt_check->execute();
    $stmt_check->bind_result($count);
    $stmt_check->fetch();
    $stmt_check->close();

    if ($count > 0) {
        
        echo '<script>alert("User already found")</script>'; 
        exit; // Stop execution
        
    }

    $sql = "INSERT INTO users (name, email, password) VALUES (?, ?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("sss", $name, $email, $password);
    $stmt->execute();
    $stmt->close();
    $conn->close();
    echo '<script>alert("User Registered")</script>';
    header('Location:login.php');
    exit;
}
?>