<?php 
require_once("./functions.php");
require_once("./includes/database.php");

require_login();
$owner_id = $_SESSION['current_user']['id'];
$response = mysqli_query($conn, "SELECT * FROM transactions WHERE owner = $owner_id");


// List of transactions for the logged in user


?>





<?php include("./includes/header.php"); ?>

    <h1>List Transaction </h1>
    <p>Monitor all your income and expenses and stay on top of your finances with ease</p>
   <?php echo "Welcome " . $_SESSION["current_user"]["username"] ; ?>

   <a class="btn" href="./create_transaction.php">Create Transaction</a>
<table>
    <tr>
        <th>S/N</th>
        <th>Title</th>
        <th>Note</th>
        <th>Amount</th>
        <th>Type</th>
        <th>Edit</th>
     
    </tr>

    <?php 
    $ii =  1;
        while($trsnax = mysqli_fetch_assoc($response)){
            ?>
<tr>
    <td> <?php echo $ii++; ?> </td>
    <td> <?php echo $trsnax["title"]; ?> </td>
    <td> <?php echo $trsnax["narrative"]; ?> </td>
    <td> <?php echo $trsnax["currency"] . $trsnax["amount"]; ?> </td>
    <td> <?php echo $trsnax["type"]; ?> </td>
    <td> <a href="./edit_transaction.php?id=<?php echo $trsnax['id']; ?>">Edit</a> </td>
</tr>
            <?php
        }
    ?>
</table>
   
<?php include("./includes/footer.php"); ?>