<?php
include_once "../db/config.php";

$id = $_GET['id'];
 $sql = "delete from equipment where id= '$id'";
 $result = mysqli_query($conn, $sql);
 if ($result)
     echo "<script>alert('Deleted')</script>";
else 
   echo "<script>alert('Unsuccessful,Please Try Again Later')</script>";
echo "<script>window.location='../admin-inbox.php'</script>";
?>