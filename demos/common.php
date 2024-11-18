<?php 

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

function get_total($staff_data) {
    $total_salary = 0;
    foreach($staff_data as $staff => $record){
        $total_salary += $record["salary"];
        // print_r($staff);
    }

    return $total_salary;
}
  

?>