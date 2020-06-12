<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Shallal menu </title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i">
    <link rel="stylesheet" href="assets/fonts/fontawesome-all.min.css">
    <link rel="stylesheet" href="assets/css/-Login-form-Page-BS4-.css">
    <link rel="stylesheet" href="assets/css/Burger-Menu-1.css">
    <link rel="stylesheet" href="assets/css/Burger-Menu.css">
    <link rel="stylesheet" href="assets/css/Login-Box-En.css">
      <script src="assets/js/qwert5.js"></script>


</head>

<body>


<?php

include 'conn.php';

$fromDate = date('20y-m-d', strtotime($_POST['fromDate']));
$toDate = date('20y-m-d', strtotime($_POST['toDate']));
$Select = $_POST['itemCat'];

if($Select == 'Food Item'){



$Srep0= "SELECT  f.name, sum(o.amt) from fooditem f join orders o on f.fid = o.fid join transaction t on t.tid = o.tid where t.odate >= '$fromDate' and t.odate <= '$toDate' group by f.name";









echo '<table class="table dataTable my-0" id="dataTable">
    <thead>
        <tr>
            <th width="80%">Item name\Category</th>
            <th width ="20%">Amount</th>
        </tr>
    </thead>
    <tbody>';

$count = 0;
$resultRep = $conn->query($Srep0);
if ($resultRep->num_rows > 0) {

  echo "<table class=\"table dataTable my-0\">";
while($row = $resultRep->fetch_assoc()) {

echo "<tr>
<td width = \"80%\" >" . $row["name"] . "</td>
<td width = \"20\">" . $row["sum(o.amt)"] . "</td></tr>" ;
}
echo "</table>";
} else { echo "0 results"; }
}


elseif ($Select == 'Food Category') {
  $Srep0= "SELECT  c.name, sum(o.amt) from fooditem f join orders o on f.fid = o.fid join transaction t on t.tid = o.tid join foodcategory c on f.cfid = c.cfid  where t.odate >= '$fromDate' and t.odate <= '$toDate' group by f.name";









  echo '<table class="table dataTable my-0" id="dataTable">
      <thead>
          <tr>
              <th width="80%">Item name\Category</th>
              <th width ="20%">Amount</th>
          </tr>
      </thead>
      <tbody>';

  $count = 0;
  $resultRep = $conn->query($Srep0);
  if ($resultRep->num_rows > 0) {

    echo "<table class=\"table dataTable my-0\">";
  while($row = $resultRep->fetch_assoc()) {

  echo "<tr>
  <td width = \"80%\" >" . $row["name"] . "</td>
  <td width = \"20\">" . $row["sum(o.amt)"] . "</td></tr>" ;
  }
  echo "</table>";
  } else { echo "0 results"; }
}





  $conn->close();








 ?>
</body>

</html>
