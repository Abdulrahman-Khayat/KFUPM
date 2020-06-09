<?php
$ID = filter_input(INPUT_POST,'ItemID');
$itemName = filter_input(INPUT_POST,'ItemName');
$itemPrice = filter_input(INPUT_POST,'ItemPrice');
$itemDescr = filter_input(INPUT_POST,'ItemDescr');
$itemCat = $_POST['itemCat'];
$itemSTS = $_POST['itemSTS'];

include 'conn.php';

$sql1 = "SELECT CFID from foodcategory where name ='$itemCat'";
$result1 = $conn->query($sql1);
$row1 = $result1->fetch_assoc();
$q1 = $row1['CFID'];



$sql3 = "SELECT stsid from status where SName = '$itemSTS'";
$result3 = $conn->query($sql3);
$row3 = $result3->fetch_assoc();
$q3 = $row3['stsid'];



$sql = "UPDATE  fooditem set Name = '$itemName', CFID = $q1, Price = $itemPrice, descr = '$itemDescr', StsID = $q3 WHERE FID = $ID";



if ($conn->query($sql)){
  header("location: table.php");

}
else{
echo "Error: ". $sql ."
". $conn->error;
    }
$conn->close();

 ?>
