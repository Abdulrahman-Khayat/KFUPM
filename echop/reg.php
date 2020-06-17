<?php
    include "connect.php";

    $name = $_POST["name"];
    $pwd = $_POST["password"];
    $email = $_POST["email"];

    echo $name;

    $sql = "INSERT INTO customer (customer_name, customer_email, password) VALUES ('$name','$email','$pwd')";
    $result = mysqli_query($conn,$sql);


    header("location:login.html");






?>