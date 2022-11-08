<?php

setcookie("user", "", time() - 3600, "/");

if(isset($_COOKIE['user'])){
    echo "Cookie ". 'user' ." telah diatur!<br/>";
    echo "Nilainya adalah " . $_COOKIE['user'];
} else {
    echo "Nama cookie ". 'user' ." tidak diatur";
}
