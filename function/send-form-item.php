<?php
    include("../db/config.php");
    // Check if the form was submitted 
    if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['id'])) { 
        // Retrieve and sanitize form inputs 
        $name = mysqli_real_escape_string($conn, $_POST['name']); 
        $level = mysqli_real_escape_string($conn, $_POST['level']);
        $course = mysqli_real_escape_string($conn, $_POST['course']);
        $sem = mysqli_real_escape_string($conn, $_POST['sem']);
        $item_name = mysqli_real_escape_string($conn, $_POST['item_name']);
        $item_reason = mysqli_real_escape_string($conn, $_POST['item_reason']);
        $imageName = ''; 
 
        // Check if an image file was uploaded 
        if ($_FILES['image']['error'] === 0) { 
            // Define the directory where the image will be saved 
            $uploadDir = 'item_image/'; 
 
            // Generate a unique file name for the image 
            $imageFileName = uniqid() . '_' . $_FILES['image']['name']; 
 
            // Define the full path to save the image 
            $imagePath = $uploadDir . $imageFileName; 
 
            // Move the uploaded image to the specified directory 
            if (move_uploaded_file($_FILES['image']['tmp_name'], $imagePath)) { 
                $imageName = $imageFileName; 
            } else { 
                echo "<script>alert('Failed to upload image.'); window.location.href = '../student-form-item.php';</script>"; 
                exit; 
            } 
        } 
 
        // Insert the menu item into the database 
        $sql = "INSERT INTO equipment (id, name, level, course, sem, item_name, item_reason, image)
        VALUES ('$id', '$name', '$level', '$course', '$sem', '$item_name', '$item_reason', '$imageName')";
        $result = mysqli_query($conn, $sql); 
        if ($result){
            echo "<script>alert('Borang Anda Berjaya di hantar!')</script>";
            
        }else{ 
            echo "<script>alert('Maaf, Anda tidak berjaya di hantar!')</script>";
            echo "<script>window.location='../student-form-item.php'</script>";
        }
    } 
 else { 
    echo "Access denied. You do not have permission to view this page."; 
} 
?>