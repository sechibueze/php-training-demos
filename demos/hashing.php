<?php

$password = "Happiness4Life";
$hash = password_hash($password, PASSWORD_DEFAULT);

echo "Hash : " . $hash;

if (password_verify("Happiness4Life ", $hash)) {
   echo "Password matches";
}

?>