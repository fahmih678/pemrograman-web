<?php

$text="<script>alert('anda dihack!'); </script>";


echo htmlspecialchars($text, ENT_QUOTES);