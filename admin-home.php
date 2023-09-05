<?php
include_once "function/admin-header.php";

session_start();
if (!isset($_SESSION['logged_in']) || $_SESSION['logged_in'] !== true) {
    echo "<script>alert('You must log in first.'); window.location.href = 'index.php';</script>";
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Home</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
<h2 class="px-6 mb-0 mt-2 text-primary text-2xl">WELCOME, <?php echo strtoupper($_SESSION['name']); ?>!<br>
        <h5 class="px-7 text-secondary"><?php echo ($_SESSION['type'])?></h5>
    </h2>
</body>
</html>