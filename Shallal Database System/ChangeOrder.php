<?php
$ID = filter_input(INPUT_POST,'OrderID');
$orderSTS = $_POST['itemSTS'];

require 'conn.php';

$sqlGetID= "SELECT stsid as ID2 from status where sname = '$orderSTS'";
$resultID = $conn->query($sqlGetID);
$rowID = $resultID->fetch_assoc();
$QID = $rowID['ID2'];

$sql = "UPDATE  transaction set StsID = $QID WHERE TID = $ID";



if ($conn->query($sql)){
  header("location: OnlineOrders.php");

}
else{
echo "Error: ". $sql ."
". $conn->error;
    }
$conn->close();

 ?>
