<?php 
require_once("./functions.php");
require_once("./includes/database.php");
require_login();

?>


<?php 

// Set initial values
$title = '';
$note = '';
$amount = 0;
$type = '';
$receipt_url = '';

$errors = [];


if (isset($_POST["send"])) {
   $title = $_POST["title"];
   $note = $_POST["note"];
   $amount = $_POST["amount"];
   $type = $_POST["type"];

// @TODO: Validate input

    // Check if a file was uploade
    if (isset($_FILES["receipt"])) {
        $file = $_FILES["receipt"];
        $file_name = $file["name"];
        $file_type = $file["type"];
        $file_loc = $file["tmp_name"];
        $file_error = $file["error"];
        $file_size = $file["size"];

        // Check filesize is within limit
        $file_limit = 1024 * 500; // 500kb
        if ($file_size > $file_limit) {
            $errors[] = "File is too large";
        }

        // Check that user uploaded right file format
        if (!str_starts_with($file_type, 'image')){
            $errors[] = "Wrong image format";
        }

        $file_extension = explode(".", $file_name)[1];

        $receipt_url = "./assets/" . time() . '.' . $file_extension;
        
        if(!move_uploaded_file($file_loc, $receipt_url)){
            $errors[] = "Failed to upload files";
        }


        // @TODO: Create a record in database
        $owner_id = $_SESSION['current_user']['id'];
        $query = "INSERT INTO transactions (title, narrative, amount, type, receipt, owner) ";
        $query .= " VALUES ( ";
        $query .= "'$title', '$note', $amount, '$type', '$receipt_url', $owner_id ";
        $query .= " ) ";

        $res = mysqli_query($conn, $query);
        if($res){
            redirect_to("./list_transactions.php");
        }
        $errors[] = "Failed to craete a new transx";

         
    }

  
}
?>

<?php include("./includes/header.php"); ?>

    <h1>Create Transaction </h1>
    <p>Monitor all your income and expenses and stay on top of your finances with ease</p>
   
   
    <form method="post" enctype="multipart/form-data">
<?php if (count($errors) > 0) {
    foreach($errors as $key => $error){ ?>

        <p> <?php echo $error; ?> </p>
<?php
    }
} ?>

        <label>Title</label>
        <input name="title" value="" /> <br>

        <label>Description</label>
        <input name="note" value="" /> <br>

        <label>Amount</label>
        <input name="amount" value="" /> <br>
        <label>Upload evidence</label>
        <input type="file" accept=".jpeg,.png,.jpg" name="receipt"   /> <br>
<select name="type">
    <option value="credit" selected> Income </option>
    <option value="debit"> Expense </option>
</select>
        <button type="submit" name="send">Send</button>
    </form>

<?php include("./includes/footer.php"); ?>