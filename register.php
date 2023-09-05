<?php
include_once "db/config.php";

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
    $sql = "SELECT * FROM user WHERE name='$name'";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {
      echo 'The username already exists.';
    } else {
      // The username is available, so insert the new user into the database
      $sql = "INSERT INTO user (name, id, nohp, email, password, confirm_password, type) VALUES ('$name', '$id', '$nohp', '$email', '$password', '$confirm_password', '$type')";
      mysqli_query($conn, $sql);

      // Redirect the user to the login page
      header('Location: index.php');
    }

    // Close the database connection
    mysqli_close($conn);
  }
}

?>

<!DOCTYPE html>
<html>
<head>
<title>Register</title>
</head>
<body>

<h1>Register</h1>

<form action="register.php" method="POST">
    <label for="name">NAME</label>
<input type="text" name="name" placeholder="Name">
    <label for="id">STAFF ID/NO.NDP</label>
<input type="text" name="id" placeholder="ID Staff or Student">
    <label for="nohp">NO. HP</label>
<input type="text" name="nohp" placeholder="No.HP">
    <label for="email">EMAIL</label>
<input type="email" name="email" placeholder="Email">
    <label for="password">PASSWORD</label>
<input type="password" name="password" placeholder="Password">
    <label for="confirm_password">CONFIRM PASSWORD</label>
<input type="password" name="confirm_password" placeholder="Confirm Password">
    <label for="type">TYPE</label>
<select name="type" id="type">
    <option value="admin">Admin</option>
    <option value="student">Student</option>
</select>
    
<input type="submit" value="Register">
</form>

</body>
</html>