<?php
session_start();


header("refresh:40;url=logout.php");


if (!isset($_SESSION['logged_in'])) {
    header('Location: login.php');
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sayfa Zaman Aşımı</title>
</head>
<body>
    <h1>Bu sayfa 90 saniye sonra kapanacak</h1>
</body>
</html>
