<?php

$itemName = filter_input(INPUT_POST,'addNewItem');
$itemPrice = filter_input(INPUT_POST,'ItemPrice');
$itemDescr = filter_input(INPUT_POST,'ItemDescr');
$itemCat = $_POST['itemCat'];
$itemSTS = $_POST['itemSTS'];

require 'conn.php';

$sql1 = "SELECT CFID from foodcategory where name ='$itemCat'";
$result1 = $conn->query($sql1);
$row1 = $result1->fetch_assoc();
$q1 = $row1['CFID'];

$sql2 = "SELECT max(FID) from fooditem where CFID = '$q1'";
$result2 = $conn->query($sql2);
$row2 = $result2->fetch_assoc();

if($row2['max(FID)'] == 0){
$q2 = $q1 +1;

}
else{
$q2 = $row2['max(FID)'] + 1;
}
$sql3 = "SELECT stsid from status where SName = '$itemSTS'";
$result3 = $conn->query($sql3);
$row3 = $result3->fetch_assoc();
$q3 = $row3['stsid'];

$date = date('Y-m-d');


$sql = "INSERT into fooditem (FID, name, CFID, Price, Descr, StsID) values
($q2,'$itemName' ,$q1 , $itemPrice, '$itemDescr', $q3)";

 $sql4 = "INSERT into fihistory (FID, name, CFID, Price, Descr, FromDate) values
 ($q2,'$itemName' ,$q1 , $itemPrice, '$itemDescr', DATE '$date')";


if ($conn->query($sql) && $conn->query($sql4) ){
  header("location: table.php");
}
else{
echo "Error: ". $sql4 ."
". $conn->error;
    }



$conn->close();

 ?>
