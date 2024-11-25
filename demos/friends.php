<?php 
session_start();

$_SESSION["current_user"] = ["username"=> "Samuel ", 'email'=>'same@sam.com'];

header('Location: message.php');


?>