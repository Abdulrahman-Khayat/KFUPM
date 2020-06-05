<?php

$ID =$_post('ItemID');

if (!empty($ID)){


$host = "localhost";
$dbusername = "root";
$dbpassword = "";
$dbname = "ssds";
// Create connection
$conn = new mysqli ($host, $dbusername, $dbpassword, $dbname);
if (mysqli_connect_error()){
die('Connect Error ('. mysqli_connect_errno() .') '
. mysqli_connect_error());
}
else{
$sql = "SELECT Fid, name, price, descr, CFID, stsid FROM fooditem WHERE FID = $ID ";
$result = mysqli_query($conn,$sql) or die(mysqli_connect_error());
	$rows = mysqli_num_rows($result);
	$row = $result->fetch_assoc();


	if($rows == 1){

    update
  ;
header("location: table.php ");
exit;
}



$conn->close();
}


}

else{
echo "Username should not be empty";
die();
}

?>
