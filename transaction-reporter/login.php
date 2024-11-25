<?php 
session_start();
 require_once("./functions.php");

?>


<?php 

print_r($_SESSION);
// Set initial values
$email = '';
$password = '';
$errors = [];


if (isset($_POST["login"])) {
   $email = $_POST["email"];
   $password = $_POST["password"];
   
    // @TODO: Validate input



    // @TODO: Create a record in database

    $user = ["username" => "Happiness Tobi", "email" => $email];
    $_SESSION["current_user"] = $user;

    redirect_to("./list_transactions.php");
  
}
?>

<?php include("./includes/header.php"); ?>

    <h1>Welcome back </h1>
 
    <form method="post" >
<?php if (count($errors) > 0) {
    foreach($errors as $key => $error){ ?>

        <p> <?php echo $error; ?> </p>
<?php
    }
} ?>

        <label>Email</label>
        <input name="email" value="" /> <br>

        <label>Password</label>
        <input name="password" type="password" value="" /> <br>

        <button type="submit" name="login">Login</button>
    </form>

<?php include("./includes/footer.php"); ?>