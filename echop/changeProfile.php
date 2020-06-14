<?php
    include "connect.php";
    $val = $_GET["id"];

    $email = $_POST["email"];
    $name = $_POST["name"];
    $pwd = $_POST["password"];
    
    if($pwd != ""){
        $sql = "UPDATE customer SET 
        Customer_email = '$email',
        Customer_name = '$name',
        password = '$pwd'
        where customer_ID = $val";
        
        $result = mysqli_query($conn,$sql);
    }
    else{
        $sql = "UPDATE customer SET 
        Customer_email = '$email',
        Customer_name = '$name'
        where customer_ID = $val";
        
        $result = mysqli_query($conn,$sql);
    }

    header("location:profile.php?id=$val");
        
?>