<?php

$catName = filter_input(INPUT_POST,'CatName');
$catDescr = filter_input(INPUT_POST,'CatDescr');

$catSTS = $_POST['itemSTS'];



require'conn.php';
$date = date('Y-m-d');
$sql1 = "SELECT max(CFID) from foodcategory ";
$result1 = $conn->query($sql1);
$row1 = $result1->fetch_assoc();
$q1 = $row1['max(CFID)'] + 200;


$sql3 = "SELECT stsid from status where SName = '$catSTS'";
$result3 = $conn->query($sql3);
$row3 = $result3->fetch_assoc();
$q3 = $row3['stsid'];



$sql = "INSERT into foodcategory(CFID, Name, Descr, stsID) values
($q1, '$catName', '$catDescr', $q3)";

$sql2 = "INSERT into fchistory(CFID, Name, Descr, FromDate) values
($q1,'$catName', '$catDescr', DATE '$date')";


if ($conn->query($sql) && $conn->query($sql2)){
  header("location: foodCat.php");

}
else{
echo "Error: ". $sql2 ."
". $conn->error;
    }
$conn->close();

 ?>
