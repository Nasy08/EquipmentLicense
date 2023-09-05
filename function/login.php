<?php 
session_start(); 
include_once "../db/config.php";  
 
// Get user input 
$id = $_POST['id']; 
$password = $_POST['password']; 
 
// Sanitize user input to prevent SQL injection 
$id = mysqli_real_escape_string($conn, $id); 
$password = mysqli_real_escape_string($conn, $password); 
 
// Perform database query 
$sql = "SELECT * FROM user WHERE id = '$id'"; 
$result = $conn->query($sql); 
 
if ($result === false) { 
    echo "Query error: " . $conn->error; 
    exit; 
} 
 
if ($result->num_rows == 1) { 
    $row = $result->fetch_assoc(); 
 
    // Verify password 
    if ($password == $row['password']) { // This is plain text comparison 
        $_SESSION['logged_in'] = true; 
        $_SESSION['name'] = $row['name']; 
        $_SESSION['id'] = $id; 
        $_SESSION['nohp'] = $row['nohp']; 
        $_SESSION['email'] = $row['email']; 
        $_SESSION['type'] = $row['type']; 
 
        if ($row['type'] == 'admin') {
            header("Location: ../admin-home.php"); // Redirect admin with jawatan=cafe to cafe orders page 
        } else if ($row['type'] == 'student') { 
            header("Location: ../student-home.php"); // Redirect non-admin users to this page 
        } else { 
            echo "<script>alert('Invalid user type.'); window.location.href = 'login.php';</script>"; 
        } 
    } else { 
        echo "<script>alert('Invalid login credentials.'); window.location.href = 'login.php';</script>"; 
    } 
} else { 
    echo "<script>alert('Invalid login credentials.'); window.location.href = 'login.php';</script>"; 
} 
?>