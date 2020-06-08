<?php
$ID = filter_input(INPUT_POST,'ItemIDDelete');

require 'conn.php';



$sql = "UPDATE  fooditem set StsID = 101 WHERE FID = $ID";
$date = date('Y-m-d');

$sql4 = "UPDATE fihistory set toDate=DATE '$date' where FID = $ID ";

if ($conn->query($sql) && $conn->query($sql4) ){
  header("location: table.php");

}
else{
echo "Error: ". $sql ."
". $conn->error;
    }
$conn->close();

 ?>
