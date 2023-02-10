<?php

$mysqli=mysqli_connect('localhost','root','','master');
$sql = "SELECT * FROM product";
$result = $mysqli->query($sql);


while($row = $result->fetch_array(MYSQLI_ASSOC)){
  $data[] = $row;
}


$results = [
        	"data" => $data ];


echo json_encode($data);
?>