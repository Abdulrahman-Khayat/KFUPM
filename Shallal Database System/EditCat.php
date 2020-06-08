<?php
$ID = filter_input(INPUT_POST,'CatID');
$CatName = filter_input(INPUT_POST,'CatName');
$CatDescr = filter_input(INPUT_POST,'CatDescr');
$CatSTS = $_POST['CatSTS'];

require'conn.php';



$sql3 = "SELECT stsid from status where SName = '$CatSTS'";
$result3 = $conn->query($sql3);
$row3 = $result3->fetch_assoc();
$q3 = $row3['stsid'];



$sql = "UPDATE  foodcategory set Name = '$CatName', Descr = '$CatDescr', StsID = $q3 WHERE CFID = $ID";



if ($conn->query($sql)){
  header("location: foodCat.php");

}
else{
echo "Error: ". $sql ."
". $conn->error;
    }
    if($q3 != 200){
      $sql2 = "UPDATE  fooditem set  StsID = 100 WHERE CFID = $ID";



      if ($conn->query($sql2)){
        header("location: foodCat.php");

      }
      else{
      echo "Error: ". $sql2 ."
      ". $conn->error;
          }
    }




$conn->close();

 ?>
