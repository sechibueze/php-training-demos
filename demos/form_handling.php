<?php

// if (isset($_GET)) {
//     print_r($_GET);

//     echo "Title " . $_GET["title"] . "<hr/>";
//     // @TODO display the rest of the user input
// }
$errors = [];

if (isset($_POST["send"])) {
    print_r($_POST);

    echo "Title " . $_POST["title"] . "<hr/>";
    // @TODO display the rest of the user input
}
echo "<hr />";
if (isset($_FILES["receipt"])) {
    print_r($_FILES);

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

    $file_path = "./assets/" . time() . '.' . $file_extension;
    move_uploaded_file($file_loc, $file_path);



    
}



?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- <form method="get"> -->
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
</body>
</html>