<?php
$cookie_name = "User";
$cookie_value= "Angkasa";
setcookie($cookie_name, $cookie_value, time()+3600, "/");
?>