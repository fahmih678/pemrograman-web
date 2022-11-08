<?php
$conn = mysqli_connect('localhost', 'root', '', 'latihan_stateful');

$username = $_POST['username'];
$password = $_POST['password'];
$sql = "SELECT * FROM user WHERE username = '". $username ."' AND password = '". $password ."'";
$data = mysqli_query($conn, $sql);
$row = mysqli_fetch_array($data);

if($row['username'] == $username && $row['password'] == $password){
    session_start();
    $_SESSION['all'] = $row;
    $_SESSION['username'] = $row['username'];
    $_SESSION['password'] = $row['password'];
    header("location:welcome.php");
} else {
    echo '<script> alert("Username atau password salah!");
            window.location="login-page.php"; </script>';
}

?>

<?php
if(isset($_SESSION['a'])){
    echo "Session ditemukan";
} else {
    echo "Session tidak ada";
}