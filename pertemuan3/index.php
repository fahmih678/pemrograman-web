<?php

mysqli_connect("host_name", "username", "password", "db_name");

$connection = mysqli_connect("localhost", "root", "", "project1");
if(!$connection) {
    die("Connection Failed : " . mysqli_connect_error());
}  echo "Connection Successfully";

mysqli_close($connection);

mysqli_select_db($connection, "db_name");


$connection = mysqli_connect("localhost", "root", "", "project1");
if(!$connection) {
    die("Connection Failed : " . mysqli_connect_error());
}  echo "Connection Successfully to Project1 <br>";
// ubah koneksi ke database project2
$connection_2 = mysqli_select_db($connection, "project2");
if(!$connection) {
    die("Connection Failed : " . mysqli_connect_error()); 
} echo "Connected Successfully to Project2";
// ...isi kode php untuk database project2...

// mysqli_query($connection, $query, resultmode<optional>)

$connection = mysqli_connect("localhost", "root", "", "project1");
if(!$connection) {
    die("Connection Failed : " . mysqli_connect_error());
} echo "Connected Successfully to Project 1 <br>";
$query_insert = mysqli_query($connection, "INSERT INTO guru(ID, NAMA_LENGKAP, ALAMAT, TTL, NIP, JURUSAN) VALUES('','Fahmi Habibi', 'Jalan Solo-Purwodadi KM 12', '1999-12-12', 'K3519070', 'RPL')");
if(!$query_insert) {
    echo ("Error query " . mysqli_error($connection)); 
} 
mysqli_close($connection);

// mysqli_num_rows()
// mysqli_num_row(result);
$connection = mysqli_connect("localhost", "root", "", "project1");
if (!$connection) {
    die("Connection Failed : " . mysqli_connect_error());
} echo "Connected Successfully to Project 1 <br>";
$query = mysqli_query($connection, "SELECT * FROM guru");
if (!$query) {
    echo ("Error query " . mysqli_error($connection)); 
} else {
    $num_of_rec  = mysqli_num_rows($query);
    echo "Number of records = " . $num_of_rec;
}
mysqli_close($connection);

// mysqli_fetch_row(result)

$connection = mysqli_connect("localhost", "root", "", "project1");
if (!$connection) {
    die("Connection Failed : " . mysqli_connect_error());
} echo "Connected Successfully to Project 1 <br>";
$query = mysqli_query($connection, "SELECT ID, NAMA_LENGKAP, JURUSAN FROM guru");
if (!$query) {
    echo ("Error query " . mysqli_error($connection)); 
} 
$data = mysqli_fetch_row($query);
print_r($data);

mysqli_close($connection);

// fetch_assoc
mysqli_fetch_assoc(result);

$connection = mysqli_connect("localhost", "root", "", "project1");
if (!$connection) {
    die("Connection Failed : " . mysqli_connect_error());
} echo "Connected Successfully to Project 1 <br>";
$query = mysqli_query($connection, "SELECT ID, NAMA_LENGKAP, JURUSAN FROM guru");
if (!$query) {
    echo ("Error query " . mysqli_error($connection)); 
} 
// assoc
$data = mysqli_fetch_assoc($query);
print_r($data);

mysqli_close($connection);

// mysqli_fetch_array("query SELECT", result_type);

$connection = mysqli_connect("localhost", "root", "", "project1");
if (!$connection) {
    die("Connection Failed : " . mysqli_connect_error());
} echo "Connected Successfully to Project 1 <br>";
$query = mysqli_query($connection, "SELECT ID, NAMA_LENGKAP, JURUSAN FROM guru");

if (!$query) {
    echo ("Error query " . mysqli_error($connection)); 
} 
echo "<br> Hasil numerik <br>";
while ($data = mysqli_fetch_array($query, MYSQLI_NUM)) {
    print "ID : " . $data[0] . "<br>";
    print "NAMA LENGKAP : " . $data[1] . "<br>";
    print "JURUSAN : " . $data[2] . "<br>"; 
} 

mysqli_close($connection);


// assoc result
while($row = mysqli_fetch_array($query, MYSQLI_ASSOC)) {
    print "ID : " . $row["ID"] . "<br>";
    print "NAMA_LENGKAP : " . $row["NAMA_LENGKAP"] . "<br>";
    print "JURUSAN : " . $row["JURUSAN"] . "<br>";
}