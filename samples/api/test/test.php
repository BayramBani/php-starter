<?php
//$myObj->name = "John";
//$myObj->age = 30;
//$myObj->city = "New York";
//$myJSON = json_encode($myObj);
//echo $myJSON;

$age = array("Peter"=>35, "Ben"=>37, "Joe"=>43);
$person = array("Person"=>$age);

echo json_encode($person);
