<?php

// if (isset($_GET)) {
//     print_r($_GET);

//     echo "Title " . $_GET["title"] . "<hr/>";
//     // @TODO display the rest of the user input
// }

if (isset($_POST["send"])) {
    print_r($_POST);

    echo "Title " . $_POST["title"] . "<hr/>";
    // @TODO display the rest of the user input
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
    <form method="post">
        <label>Title</label>
        <input name="title" value="" /> <br>

        <label>Description</label>
        <input name="note" value="" /> <br>

        <label>Amount</label>
        <input name="amount" value="" /> <br>
<select name="type">
    <option value="credit" selected> Income </option>
    <option value="debit"> Expense </option>
</select>
        <button type="submit" name="send">Send</button>
    </form>
</body>
</html>