<?php 

$first_name = "Tobi";
$last_name = "Bolanle";
$full_name = $first_name . " " . $last_name;
echo "Full name " . $full_name;
# Data Types
$scores = array(34,54,66,29,45,12);

$members = ["Samuel", "Happiness", "Mary", "Tobi"];

$cars = [
    "benz" => ["Happiness", "red", 20000],
    "ford" => ["Mary", "pink", 35000],
    "venza" => ["Tobi", "green", 780000]
];


echo $members[2] . "<br />";
print_r($members);
echo "<hr />";
print_r($cars);
echo "<hr />";

echo $cars["venza"][2];

print_r($cars["benz"]);

# print_r($_SERVER);


?>