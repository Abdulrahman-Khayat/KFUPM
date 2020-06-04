<?php
  session_start();
  $EID_T= $_SESSION['var3'];
  include 'conn.php';


  $itemName =$_POST['itemName'];
  $QTY = $_POST['QTY'];


  $sql0 ="SELECT min(ODate) as ODate from transaction";
  $result0 = $conn->query($sql0);
  $row0 = $result0->fetch_assoc();
  $check_last_TID = $row0['ODate'];



  echo $itemName;
  $sql2 = "SELECT FID as foodid from fooditem where name ='$itemName'";
  $result2 = $conn->query($sql2);
  $row2 = $result2->fetch_assoc();
  $FID_q = $row2['foodid'];


  $sql3 = "SELECT max(TID) as TID_T from transaction ";
  $result3 = $conn->query($sql3);
  $row3 = $result3->fetch_assoc();
  $TID = $row3['TID_T'];


  $sql4 = "SELECT Price as foodPrice from fooditem where fid = '$FID_q'";
  $result4 = $conn->query($sql4);
  $row4 = $result4->fetch_assoc();
  $q4 = $row4['foodPrice'];


  $sql1 ="SELECT max(TID) as max_tid_raw from transaction";
  $result1 = $conn->query($sql1);
  $row1 = $result1->fetch_assoc();
  $Max_TID = $row1['max_tid_raw'];
  echo $FID_q;
  $SQL6 = "INSERT into orders (TID,FID,QTY,Amt,Stsid) values ($Max_TID,$FID_q,$QTY,$q4*$QTY,400)";


  if ($conn->query($SQL6)){
  header("Location: Cashier.php");
  exit;
      		       }


  else{
  echo "Error: ". $SQL6."
  ". $conn->error;
      }


$conn->close();
?>
