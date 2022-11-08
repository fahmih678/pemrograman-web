<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sesi 5 - Checking</title>
</head>
<body>
    <?php
        // Check session menggunakan isset    
        if(isset($_SESSION['alamaat'])) {
            echo "alamat saya " . $_SESSION['alamat'];
        } else {
            echo "Variable session alamat tidak ada / sudah dihapus";
        }
    ?>
</body>
</html>