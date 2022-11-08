<?php
/**
 * Menggunakan mysqli_connect untuk mengkoneksi ke database
 */
 
$db_hostname = 'localhost';
$db_name = 'elektro_store';
$db_username = 'root';
$db_password = '';
 
$conn_db = mysqli_connect($db_hostname, $db_username, $db_password, $db_name); 

if(!$conn_db) {
    die("Connection Failed : " . mysqli_connect_error());
} 