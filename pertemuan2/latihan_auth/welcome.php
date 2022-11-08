<?php
session_start();
if(!isset($_SESSION['username'])){
    header("location:login-page.php");
    exit();
} else {
    echo "<h1><p align=center>Selamat Anda berhasil login</p></h1>";
    echo "<br><h3><p align=center><a href='logout.php'>Logout</a></p></h3>";
}
?>