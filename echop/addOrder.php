<?php
    include "connect.php";
    $val = $_GET["id"];
    $tranID = 0;
    $total = 10;

     $sql = "INSERT INTO transaction(customer_ID) VALUES($val)";
     $result = mysqli_query($conn,$sql);
    
     $sql = "SELECT TID from transaction ORDER BY TID DESC LIMIT 1";
     $result = mysqli_query($conn,$sql);
     if(mysqli_num_rows($result) > 0){
         $row = mysqli_fetch_array($result);
         $tranID = $row["TID"];
     }

     $sql = "SELECT * FROM cart where customer_ID = $val";
     $result = mysqli_query($conn,$sql);
     if(mysqli_num_rows($result) > 0){
         while($row = mysqli_fetch_array($result)){
             $sqlOrder = "INSERT INTO orders (TID, total, quantity,product_ID) VALUES ($tranID,$row[Total],$row[Quantity],$row[product_ID])";
             $resultORder = mysqli_query($conn,$sqlOrder);
            $total += $row["Total"]; 
            


     }
     }
     $sql = "UPDATE transaction SET 
        total = $total
        WHERE TID = $tranID ";
     $result = mysqli_query($conn,$sql);

      $sql = "UPDATE transaction SET 
        total = $total
        WHERE TID = $tranID ";
     $result = mysqli_query($conn,$sql);




     


     $sql = "DELETE FROM cart where customer_ID = $val";
     $result = mysqli_query($conn,$sql);

     header("location:orders.php?id=$val");



?>