<?php
session_start();
// cek apakah ada username
if(!isset($_SESSION['username'])){
    header('Location:login-page.php');
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Page</title>
</head>
<body>
    <h1><p align=center>Hello, Selamat Datang <?= $_SESSION['username']; ?>!!!</p></h1>
    <p align=center>Kamu berada di page <b>Admin</b></p>
    <br><h3><p align=center><a href='logout.php'>Logout</a></p></h3>
    
</body>
</html>