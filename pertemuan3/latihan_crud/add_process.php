<?php
 // Cek jika form telah di submit, kemudian memasukkan data dari form ke customers table.
if(isset($_POST['Submit'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    date_default_timezone_set('Asia/Jakarta');
    $created = date("Y-m-d H:i:s");
        
    // membuat koneksi ke database menggunakan file config.php dengan include_once
    include_once("config.php");
                
    // Memasukkan data customer ke tabel customers
    // $conn_db berasal dari config.php
    $result = mysqli_query($conn_db, "INSERT INTO customers(name,email,phone,created) VALUES('$name','$email','$phone','$created')");
    
    // Menampilkan pesan ketika customer telah ditambah
    echo "Customer ". $name ." added successfully. <a href='index.php'>View Customers</a>";
}
?>