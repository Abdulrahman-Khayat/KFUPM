<?php

$ID = filter_input(INPUT_POST,'Phone2');
$password = filter_input(INPUT_POST,'pwd2');
$isLogin =0;
if (!empty($ID)){

if (!empty($password)){

require 'conn.php';

$sql = "SELECT phoneNo FROM customer WHERE PhoneNo = $ID and password ='$password'";
$result = mysqli_query($conn,$sql) or die(mysqli_connect_error());
	$rows = mysqli_num_rows($result);
	$row = $result->fetch_assoc();




	if($rows == 1){

  header("location: customerPage.php");

}
else{
	echo "<script>
	alert('Wrong password or ID');
	window.location.href='login.html';
	</script>";

}
if ($conn->query($sql)){
echo "New record is inserted sucessfully";
      		       }
else{
echo "Error: ". $sql ."
". $conn->error;
    }


		$conn->close();

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
