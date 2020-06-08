<?php
$ID = filter_input(INPUT_POST,'CatDelete');

require 'conn.php';


$sql = "UPDATE  fooditem set StsID = 201 WHERE CFID = $ID";



if ($conn->query($sql)){
  header("location: foodCat.php");

}
else{
echo "Error: ". $sql ."
". $conn->error;
    }
  $sql2 = "UPDATE foodcategory set StsID = 201 WHERE CFID = $ID";



    if ($conn->query($sql2)){
      header("location: foodCat.php");

    }
    else{
    echo "Error: ". $sql2 ."
    ". $conn->error;
        }




$conn->close();

 ?>
