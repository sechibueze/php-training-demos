<?php 

# Data Types
$scores = array(34,54,66,29,45,12);

$members = ["Samuel", "Happiness", "Mary", "Tobi"];

$cars = [
    "benz" => ["Happiness", "red", 20000],
    "ford" => ["Mary", "pink", 35000],
    "venza" => ["Tobi", "green", 780000]
];



foreach($members as $member){
    echo $member . "<br />";
}

foreach ($cars as $car_name => $properties) {
 echo $car_name . "<br />";
 foreach($properties as $prop_name){
    echo $prop_name . "<br />";
 }
echo "<hr />";
}

?>