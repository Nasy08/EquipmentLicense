<?php
session_start();
include "../db/config.php"; 


// Check if the form has been submitted
if ($_SERVER['REQUEST_METHOD'] == 'POST') {

  // Get the username and password from the form
  $id = $_POST['id'];
  $password = $_POST['password'];

  // Check if the username and password are valid
  if ($id == 'id' && $password == 'password') {
    
    $_SESSION['id'] = $id;
    header('Location: home.php');
  } else {
    // The login is unsuccessful
    echo 'Invalid username or password.';
  }
}

?>