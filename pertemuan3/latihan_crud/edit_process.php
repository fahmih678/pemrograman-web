<?php
// membuat koneksi ke database menggunakan file config.php dengan include_once
include_once("config.php");
// Cek jika form sudah di submit dan terdapat post dengan nama update, kemudian mengarahkan ke homepage ketika berhasil update
if(isset($_POST['update']))
{	
    $id = $_POST['id'];
    
    $name=$_POST['name'];
    $phone=$_POST['phone'];
    $email=$_POST['email'];
    date_default_timezone_set('Asia/Jakarta');
    $updated=date('Y-m-d H:i:s');
        
    // update customer data
    // $conn_db berasal dari config.php
    $result = mysqli_query($conn_db, "UPDATE customers SET name='$name',email='$email',phone='$phone',updated='$updated' WHERE id=$id");
    
    // redirect ke homepage untuk menampilkan daftar customers yang telah di update
    if ($result){
        $message = "Customer ". $name ." berhasil di perbarui";
    } else {
        $message = "Gagal memperbarui customer ". $name;
    }
    
    // Setelah men-delete di redirect lagi ke Home, sehingga list customer update terakhir yang ditampilkan 
    header("Location:index.php?message=".$message);
    
}
?>