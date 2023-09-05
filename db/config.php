<?php
$host="localhost";
$user="root";
$password="";
$database="elicense";
$conn= mysqli_connect($host, $user, $password, $database);
if(mysqli_connect_error()){
    echo "FAIL";
    exit();
}else{
}
?>