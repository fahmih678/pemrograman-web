<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sesi 2 - Call</title>
</head>
<body>
    <?php 
    // Menampilkan variabel sesi yang telah di buat di file sesi1.php
    echo "Hallo, nama saya adalah " . $_SESSION['nama'] . "<br>";
    echo "Nomor absen saya adalah " . $_SESSION['absen'];
    ?>
</body>
</html>