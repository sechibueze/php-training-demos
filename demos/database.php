<?php

// Connect to database
print_r($_ENV);
$connection = mysqli_connect("localhost", "root", "", "nextshop") or die("Failed to connect to database");

// Query the Database
// $query = "INSERT INTO messages (text) VALUES ('Getting started with PHP/MySQL')";
// $result = mysqli_query($connection, $query);
// if ($result) {
//     echo "Text inserted";
// }


// $text = 'PHP/MYSQl Example Updated++';
// $query = "UPDATE messages ";
// $query .= "SET text = '$text' ";
// $query .= "WHERE id = 16";
// echo $query;

// $result = mysqli_query($connection, $query);
// if ($result) {
//     echo "Text updated";
// }


$query = "SELECT * FROM messages";
$result = mysqli_query($connection, $query);
?>

<?php
// Retrive details from Query result

if ($result) {
    while($row = mysqli_fetch_assoc($result)){
        echo $row["id"] . $row["text"] . "<br />";

    }
 }

?>


<?php




// Close connection
if ($connection) {
  mysqli_close($connection);
}

?>