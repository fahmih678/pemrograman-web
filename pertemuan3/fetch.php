<?php
// mysqli_fetch_array("query SELECT", result_type);

$connection = mysqli_connect("localhost", "root", "", "project1");
if (!$connection) {
    die("Connection Failed : " . mysqli_connect_error());
} echo "Connected Successfully to Project 1 <br>";
$query = mysqli_query($connection, "SELECT ID, NAMA_LENGKAP, JURUSAN, NO_ABSEN, ALAMAT, TANGGAL_LAHIR FROM murid");

if (!$query) {
    echo ("Error query " . mysqli_error($connection)); 
} 
// echo "<br> Hasil numerik <br>";
// while ($data = mysqli_fetch_array($query, MYSQLI_NUM)) {
//     print "ID : " . $data[0] . "<br>";
//     print "NAMA LENGKAP : " . $data[1] . "<br>";
//     print "JURUSAN : " . $data[2] . "<br>"; 
// } 



// assoc result
while($row = mysqli_fetch_array($query, MYSQLI_ASSOC)) {
    print "ID : " . $row["ID"] . "<br>";
    print "NAMA_LENGKAP : " . $row["NAMA_LENGKAP"] . "<br>";
    print "TANGGAL_LAHIR : " . $row["TANGGAL_LAHIR"] . "<br>";
    print "NO_ABSEN : " . $row["NO_ABSEN"] . "<br>";
    print "JURUSAN : " . $row["JURUSAN"] . "<br>";
    print "ALAMAT : " . $row["ALAMAT"] . "<br> <br>";
}

mysqli_close($connection);
