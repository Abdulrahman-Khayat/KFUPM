<?php
	session_start();
$ID = filter_input(INPUT_POST,'Phone2');
$password = filter_input(INPUT_POST,'pwd2');
$isLogin =0;
if (!empty($ID)){

if (!empty($password)){

require 'conn.php';

$sql = "SELECT ETID, EID as EID99, Fname, Lname FROM employee WHERE EID = $ID and password ='$password' and stsid = 300";
$result = mysqli_query($conn,$sql) or die(mysqli_connect_error());
	$rows = mysqli_num_rows($result);
	$row = $result->fetch_assoc();

	$UserGlobal = $row['Fname'];
	$UserGlobal2 = $row['Lname'];
	$UserGlobal3 = $row['EID99'];
	$_SESSION['var']=$UserGlobal;
	$_SESSION['var2']=$UserGlobal2;
	$_SESSION['var44']=$UserGlobal3;


	if($rows == 1){

        if($row['ETID'] == '2'){

          header("location: Cashier.php");
				exit;
			}
			elseif($row['ETID'] == 1){

					  header("location: index.php");
          exit;
				}

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
