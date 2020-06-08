<?php
$ID = filter_input(INPUT_POST,'EmpID');
$EmpNewFName = filter_input(INPUT_POST,'EmpNewFName');
$EmpNewLname = filter_input(INPUT_POST,'EmpNewLName');
$EmpPwd = filter_input(INPUT_POST,'EmpNewPwd');
$EmpSTS = $_POST['itemSTS'];

include 'conn.php';





$sql3 = "SELECT stsid from status where SName = '$EmpSTS'";
$result3 = $conn->query($sql3);
$row3 = $result3->fetch_assoc();
$q3 = $row3['stsid'];



$sql = "UPDATE  Employee set FName = '$EmpNewFName',Lname = '$EmpNewLname', password = '$EmpPwd', Stsid = $q3  WHERE EID = $ID";



if ($conn->query($sql)){
  header("location: empTable.php");

}
else{
echo "Error: ". $sql ."
". $conn->error;
    }
$conn->close();

 ?>
