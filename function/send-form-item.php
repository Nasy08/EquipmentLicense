<?php
    include("../db/config.php");

    if(isset($_POST['id'])) {    
    $id = (isset($_POST['id']) ? $_POST['id'] : ''); 
    $name = $_POST['name'];
    $level = $_POST['level'];
    $course = $_POST['course'];
    $sem = $_POST['sem'];
    $item_name = $_POST['item_name'];
    $item_reason = $_POST['item_reason'];
    $img = $_POST['img'];
    
    $sql = "INSERT INTO equipment (id, name, level, course, sem, item_name, item_reason, img)
    VALUES ('$id', '$name', '$level', '$course', '$sem', '$item_name', '$item_reason', '$img')";
    $result = mysqli_query($conn, $sql); 
    if ($result){
        echo "<script>alert('Borang Anda Berjaya di hantar!')</script>";
        echo "<script>window.location='../student-home.php'</script>";
    }else{ 
        echo "<script>alert('Maaf, Anda tidak berjaya di hantar!')</script>";
        echo "<script>window.location='../student-form-item.php'</script>";
    }
}