<?php

$EMPFname = filter_input(INPUT_POST,'EMPFName');
$EMPLname = filter_input(INPUT_POST,'EMPLName');
$EMPPwd = filter_input(INPUT_POST,'EMPPwd');

$itemSTS = $_POST['itemSTS'];
include 'conn.php';

$sql1 = "SELECT max(EID) from Employee where ETID = 2";
$result1 = $conn->query($sql1);
$row1 = $result1->fetch_assoc();
$q1 = $row1['max(EID)'] + 1;


$sql3 = "SELECT stsid from status where SName = '$itemSTS'";
$result3 = $conn->query($sql3);
$row3 = $result3->fetch_assoc();
$q3 = $row3['stsid'];



$sql = "INSERT into Employee (EID, ETID, Fname, Lname, stsID, password) values
($q1,2 ,'$EMPLname' , '$EMPFname', $q3,'$EMPPwd')";



if ($conn->query($sql)){
  header("location: empTable.php");

}
else{
echo "Error: ". $sql ."
". $conn->error;
    }
$conn->close();

 ?>
