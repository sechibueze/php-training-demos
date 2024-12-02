<?php 
session_start();
 require_once("./functions.php");
 require_once("./includes/database.php");

?>


<?php 

print_r($_SESSION);
// Set initial values
$username = '';
$email = '';
$password = '';
$errors = [];


if (isset($_POST["signup"])) {
   $username = $_POST["username"];
   $email = $_POST["email"];
   $password = $_POST["password"];
   
    // @TODO: Validate input


    $password_hash = password_hash($password, PASSWORD_DEFAULT);
    // @TODO: Create a record in database
    $query = "INSERT INTO users (username, email, password) ";
    $query .= "VALUES (";
    $query .= "'$username', '$email', '$password_hash'";
    $query .= " )";

    $result = mysqli_query($conn, $query);
    if ($result) {
        
        redirect_to("./login.php");
    }

    // $user = ["username" => "Happiness Tobi", "email" => $email];
    // $_SESSION["current_user"] = $user;

    
  
}
?>

<?php include("./includes/header.php"); ?>

    <h1>Register </h1>
 
    <form method="post" >
<?php if (count($errors) > 0) {
    foreach($errors as $key => $error){ ?>

        <p> <?php echo $error; ?> </p>
<?php
    }
} ?>

        <label>Name</label>
        <input name="username" value="" /> <br>
        
        <label>Email</label>
        <input name="email" value="" /> <br>

        <label>Password</label>
        <input name="password" type="password" value="" /> <br>

        <button type="submit" name="signup">Register</button>
    </form>

<?php include("./includes/footer.php"); ?>