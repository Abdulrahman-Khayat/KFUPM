<?php
session_start();
$EID_T= $_SESSION['var44'];

include 'conn.php';

$SQL= "SELECT TID as TID_23 from transaction where ODate = '0000-00-00'";
$result2 = $conn->query($SQL);
$row4 = $result2->fetch_assoc();
$q4 = $row4['TID_23'];





$SQLamt = "SELECT sum(Amt) as Amt from orders where TID = $q4";
$resultAmt = $conn->query($SQLamt);
$rowAmt = $resultAmt->fetch_assoc();
$qamt = $rowAmt['Amt'];



$qweqwe2 = "UPDATE transaction set  TotalAmt = $qamt where TID = $q4";
$result5 = $conn->query($qweqwe2);
$DATE =date('Y-m-d');
$qweqwe = "UPDATE transaction set  ODate = date '$DATE' where TID = $q4";
$result5 = $conn->query($qweqwe);



$sql1 ="SELECT max(TID) as max_tid_raw from transaction";
$result1 = $conn->query($sql1);
$row1 = $result1->fetch_assoc();
$Max_TID = $row1['max_tid_raw']+1;

$sql44= "INSERT into transaction (TID,EID,ODate,TotalAmt,Stsid) values ($Max_TID,$EID_T,'0000-00-00',0,400)";

if($conn->query($sql44)){

header("Location: Cashier.php");
exit;

}
$conn->close();

?>
