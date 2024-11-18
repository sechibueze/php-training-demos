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


$staff_data = [
  array(  "name" => "Sam",
  "dept" => "IT",
  "salary" => 23000),
  array(  "name" => "Happiness",
  "dept" => "IT",
  "salary" => 23000),
  array(  "name" => "Mary",
  "dept" => "IT",
  "salary" => 23000),
  array(  "name" => "Tobi",
  "dept" => "IT",
  "salary" => 23000)
];
$total_salary = 0;
foreach($staff_data as $staff => $record){
    $total_salary += $record["salary"];
    print_r($staff);
}

echo "Total Salary: " . $total_salary;
?>

<table>
    <tr><th>Name</th>
    <th>Name</th>
    <th>Name</th>
</tr>

<?php 
foreach($staff_data as $key => $staff_member){
 ?>
 
 <tr>
    <td> <?php echo $staff_member["name"]; ?> </td>
    <td> <?php echo $staff_member["dept"]; ?> </td>
    <td> <?php echo $staff_member["salary"]; ?> </td>
 </tr>

 <?php
}
?>

</table>