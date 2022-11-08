<?php 
$connection = mysqli_connect("localhost", "root", "", "project1");
if(!$connection) {
    die("Connection Failed : " . mysqli_connect_error());
} echo "Connected Successfully to Project 1 <br>";
$query_insert = mysqli_query($connection, "INSERT INTO guru(ID, NAMA_LENGKAP, ALAMAT, TANGGAL_LAHIR, NIP, JURUSAN) VALUES('','Ramadhan', 'Jalan Solo-Purwodadi', '1999-11-11', 'K3519070', 'RPL')");
if(!$query_insert) {
    echo ("Error query " . mysqli_error($connection)); 
} 
mysqli_close($connection);
