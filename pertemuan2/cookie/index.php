<?php

$cookie_name = "User";
$cookie_value= "Angkasa";
setcookie($cookie_name, $cookie_value, time()+3600, "/");

if(!isset($_COOKIE[$cookie_name])){
   echo "Nama cookie ".$cookie_name." tidak diatur";
} else {
    echo "Cookie ". $cookie_name ." telah diatur!<br/>";
    echo "Nilainya adalah " . $_COOKIE[$cookie_name];
}
?>