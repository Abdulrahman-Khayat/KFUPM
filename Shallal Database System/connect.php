<?php

$phone = filter_input(INPUT_POST,'Phone');
$password = filter_input(INPUT_POST,'pwd');
$fname =filter_input(INPUT_POST,'fname');
$lname =filter_input(INPUT_POST,'lname');
if (!empty($phone)){
if (!empty($password)){

include 'conn.php';
else{
$sql = "INSERT INTO customer (fname,lname,phoneNo, password)
values ('$fname','$lname',$phone,'$password')";
if ($conn->query($sql)){
  header("location: login.html");
  exit;
      		       }
else{
echo "Error: ". $sql ."
". $conn->error;
    }
$conn->close();
}
}
else{
echo "Password should not be empty";
die();

}
}

else{
echo "Username should not be empty";
die();
}

?>
