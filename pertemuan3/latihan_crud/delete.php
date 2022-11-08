<?php
// Membuat koneksi database dengan memanggil config.php
include_once("config.php");
 
// Mengambil id customer dari URL 
$id = $_GET['id'];
 
// Men-delete customer dari tabel berdasarkan id yang diberikan
// $conn_db berasal dari config.php
$result = mysqli_query($conn_db, "DELETE FROM customers WHERE id=$id");
if ($result){
    $message = "Berhasil menghapus customer";
} else {
    $message = "Gagal menghapus customer";
}
 
// Setelah men-delete di redirect lagi ke Home, sehingga list customer update terakhir yang ditampilkan 
header("Location:index.php?message=".$message);
?>