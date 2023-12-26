<?php
$conn = new mysqli("localhost","root","Naveen_2001","canteen");
$sql = "select * from food;";
$result = $conn -> query($sql);
$dataArray = array();
while($row = $result -> fetch_assoc()){
    $dataArray[] = $row;
}
header("Content-Type: application/json");

echo json_encode($dataArray);



?>