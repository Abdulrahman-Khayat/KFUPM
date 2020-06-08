<?php
$ID = filter_input(INPUT_POST,'EmpID');

require'conn.php';



$sql = "UPDATE  Employee set StsID = 301 WHERE EID = $ID";



if ($conn->query($sql)){
  header("location: empTable.php");

}
else{
echo "Error: ". $sql ."
". $conn->error;
    }
$conn->close();

 ?>
