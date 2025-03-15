<?php
session_start();

if (!isset($_SESSION["username"]) && isset($_COOKIE["username"])) {
    $_SESSION["username"] = $_COOKIE["username"];
}

if (!isset($_SESSION["username"])) {
    header("Location: ./login.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Success</title>
</head>
<body>
    <h2>Đăng nhập thành công!</h2>
    <p>Chào mừng, <?= htmlspecialchars($_SESSION["username"]) ?>!</p>
    <a href="logout.php">Đăng xuất</a>
</body>
</html>
