<?php
session_start();
if(!isset($_SESSION["register"])){
    header("Location: homepage.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>This is the homepage</h1>
    <a href="logout.php" class = "btn btn-warning">Logout</a>
</body>
</html>