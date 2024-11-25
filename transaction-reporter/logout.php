<?php
session_destroy();

require_once("./functions.php");
redirect_to("./login.php");
?>