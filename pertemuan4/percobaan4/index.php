<?php

session_start();

if(empty($_SESSION['token'])){
    $_SESSION['token'] = base64_encode(openssl_random_pseudo_bytes(32));
}

if(!empty($_GET['submit'])){
    if($_SESSION['token'] == $_GET['token_form']){
        session_destroy();
        die('user terhapus');
    }
}

?>

<form action="" method="GET">
    <input type="text" name="data" value="">
    <input type="hidden" name="token_form" value="<?=$_SESSION['token'] ?>">
    <input type="submit" name="submit" value="okey">
</form>