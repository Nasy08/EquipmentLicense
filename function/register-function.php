<?php
session_start(); 
include_once "../db/config.php";

// Check if the form has been submitted
if ($_SERVER['REQUEST_METHOD'] == 'POST') {

  // Get the form data
  $name = $_POST['name'];
  $id = $_POST['id'];
  $nohp = $_POST['nohp'];
  $email = $_POST['email'];
  $password = $_POST['password'];
  $confirm_password = $_POST['confirm_password'];
  $type = $_POST['type'];
  

  // Validate the form data
  if ($password != $confirm_password) {
    echo 'The passwords do not match.';
  } else {
    // The registration is successful

    // Check if the username already exists
    $sql = "SELECT * FROM user WHERE id='$id'";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {
      echo 'The username already exists.';
    } else {
      // The username is available, so insert the new user into the database
      $sql = "INSERT INTO user (name, id, nohp, email, password, confirm_password, type) VALUES ('$name', '$id', '$nohp', '$email', '$password', '$confirm_password', '$type')";
      mysqli_query($conn, $sql);

      // Redirect the user to the login page
      echo "<script>alert('Berjaya Register')</script>";
      echo "<script>window.location='../index.php'</script>";
    }

    // Close the database connection
    mysqli_close($conn);
  }
}

?>