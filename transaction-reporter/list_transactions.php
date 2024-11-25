<?php session_start(); 
require_once("./functions.php");



if (!isset($_SESSION["current_user"])) {
   redirect_to("./login.php");
}

?>





<?php include("./includes/header.php"); ?>

    <h1>List Transaction </h1>
    <p>Monitor all your income and expenses and stay on top of your finances with ease</p>
   <?php echo "Welcome " . $_SESSION["current_user"]["username"] ; ?>

   <a href="./create_transaction.php">Create Transaction</a>

   
<?php include("./includes/footer.php"); ?>