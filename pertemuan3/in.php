<?php

$connection = mysqli_connect("localhost", "root", "", "project1");
if(!$connection) {
    die("Connection Failed : " . mysqli_connect_error());
} echo "Connected Successfully to Project 1 <br>";
$query_insert = mysqli_query($connection, "INSERT INTO murid(ID, NAMA_LENGKAP, ALAMAT, TANGGAL_LAHIR, NO_ABSEN, JURUSAN) VALUES('','Rozi', 'Karanganyar', '2000-8-9', '13', 'RPL')");
if(!$query_insert) {
    echo ("Error query " . mysqli_error($connection)); 
} 
mysqli_close($connection);
