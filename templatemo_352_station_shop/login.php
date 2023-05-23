<?php
// nezabudnut databazu premenovat ak by nesla na ntb
$host = 'localhost';
$dbUsername = 'root';
$dbPassword = '';
$dbName = 'login';


$conn = new mysqli($host, $dbUsername, $dbPassword, $dbName);


if ($conn->connect_error) {
    die('Connection failed: ' . $conn->connect_error);
}


if (isset($_POST['username']) && isset($_POST['password'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    
    $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

    
    $stmt = $conn->prepare('INSERT INTO users (username, password) VALUES (?, ?)');
    $stmt->bind_param('ss', $username, $hashedPassword);

    if ($stmt->execute()) {
        
        echo '<script>alert("Registration successful!");</script>';
        echo '<script>window.location.href = "index.php";</script>';
        exit;
    } else {
        
        echo '<script>alert("Failed to register. Please try again.");</script>';
    }

    
    $stmt->close();
}


$conn->close();
?>