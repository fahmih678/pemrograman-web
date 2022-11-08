<?php

$conn = mysqli_connect('localhost', 'root', '', 'testing');

if(mysqli_connect_errno($conn)){
    echo "Failed to connect MySQL :". mysqli_connect_errno();
}

$query = mysqli_query($connection, "SELECT ID, NAMA_LENGKAP, JURUSAN FROM guru");
