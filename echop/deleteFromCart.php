<?php
    session_start();

    include "connect.php";
    $val = $_GET["id"];
    $CID = $_GET["name"];
    $price = 0;

    $sqlPrice = "SELECT price from products WHERE product_ID = $val";
    $result = mysqli_query($conn,$sqlPrice);
    if(mysqli_num_rows($result) > 0){
        $row = mysqli_fetch_array($result);
        $price = $row["price"];
    }



    $sqlQty = "SELECT Quantity FROM cart WHERE customer_ID = $CID AND product_ID = $val";
    $result2 = mysqli_query($conn,$sqlQty);
    if(mysqli_num_rows($result2) > 0){
        $row2 = mysqli_fetch_array($result2);
        if($row2["Quantity"] == 1){
            $sql = "DELETE FROM cart WHERE product_ID = $val AND Customer_ID = $CID";
            $result = mysqli_query($conn,$sql);
        }
        else{
            $qty = $row2["Quantity"] - 1;
            $total = $qty * $price;
            $sql = "UPDATE cart SET Quantity = $qty, Total = $total WHERE customer_ID = $CID AND product_ID = $val";
            $result = mysqli_query($conn,$sql);
        }


    }


    
   


    header("location:cart.php?id=$CID");




?>