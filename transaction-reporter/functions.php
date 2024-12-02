
<?php 
session_start();
function redirect_to($page){
    header("Location: " . $page);
}


function require_login(){
    if (!isset($_SESSION["current_user"])) {
        redirect_to("./login.php");
     }
}
?>