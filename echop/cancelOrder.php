<?php
    include "connect.php";
    $val = $_GET["id"];
    $val2 = $_GET["name"];

    $sql = "UPDATE transaction SET status = 38 WHERE TID = $val";
    $result = mysqli_query($conn,$sql);



    header("location:orders.php?id=$val2");





?>