<?php
    session_start();
    include "connect.php";
    $val = $_GET["id"];
    $CID = $_SESSION["customer_ID"];
    $price = 0;
    $qty = 1;
    $total = 0;
    $sqlPrice = "SELECT price from products WHERE product_ID = $val";
    $result = mysqli_query($conn,$sqlPrice);
    if(mysqli_num_rows($result) > 0){
        $row = mysqli_fetch_array($result);
        $price = $row["price"];
    }


    $sql2 = "SELECT * FROM cart WHERE Customer_ID = $CID AND product_ID = $val";
    $result2 = mysqli_query($conn,$sql2);
    if(mysqli_num_rows($result2) > 0){
        $row2 = mysqli_fetch_array($result2);
        $qty = $row2["Quantity"] + 1;
        $total = $price * $qty;
        $sql = "UPDATE CART set Quantity = $qty, Total = $total where customer_ID = $CID AND product_ID = $val ";
        $result = mysqli_query($conn,$sql);   
    } 
    else{
        $sql = "INSERT INTO CART(product_ID, Customer_ID, total) VALUES ($val,$CID,$price)";
        $result = mysqli_query($conn,$sql);
    }

    header("location:cart.php?id=$CID");


?>