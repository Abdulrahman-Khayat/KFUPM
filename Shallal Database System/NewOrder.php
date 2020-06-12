<?php

include 'conn.php';


$sql1 ="SELECT max(TID) as max_tid_raw from transaction";
$result1 = $conn->query($sql1);
$row1 = $result1->fetch_assoc();
$Max_TID = $row1['max_tid_raw']+1;

$sql44= "INSERT into transaction (TID,EID,ODate,TotalAmt,Stsid) values ($Max_TID,$EID_T,'0000-00-00',0,400)";
$result = $conn->query($sql44);

$conn->close();


?>
