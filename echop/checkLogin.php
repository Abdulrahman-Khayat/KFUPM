<?php
    session_start();
    include "connect.php";

    $email = $_POST["email"];
    $pwd = $_POST["password"];
    $_SESSION["noData"] = false;
    $_SESSION["customer_ID"] = 0;
    $sql = "SELECT customer_ID, customer_name, password FROM customer WHERE customer_email = '$email' AND status = 3";
    $result = mysqli_query($conn,$sql);
    if(mysqli_num_rows($result)>0){
        $row = mysqli_fetch_array($result);
        $_SESSION["customer_name"] = $row["customer_name"];
        $_SESSION["customer_ID"] = $row["customer_ID"];
        if($row["password"] == $pwd)
            header("location:indexLogged.php?id=$row[customer_ID]");
        else{
            $_SESSION["noData"] = true;
            header("location:login.html");
        }
    }
    else{
        $_SESSION["noData"] = true;
        header("location:login.html");
    }
    
?>