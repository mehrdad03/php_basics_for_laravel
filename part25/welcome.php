<?php
session_start();

$userName= $_SESSION['userName'];
$language=$_COOKIE['language'];


if (!isset($_SESSION['userName'])){
    header('Location:login.php');
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Welcome</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>

<div class="container mt-5">
    <h1>Welcome, <?=htmlspecialchars($userName) ?>!</h1>
    <p>Your preferred language is: <?= $language ?></p>
    <a href="logout.php" class="btn btn-danger">Logout</a>
</div>
</body>
</html>
