<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Dashboard - Brand</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i">
    <link rel="stylesheet" href="assets/fonts/fontawesome-all.min.css">
    <link rel="stylesheet" href="assets/css/-Login-form-Page-BS4-.css">
    <link rel="stylesheet" href="assets/css/Login-Box-En.css">
</head>
<body id="page-top">
    <?php session_start(); $y = $_SESSION['var'];
      $eid111 = $_SESSION['var44'];
    echo'


  <style>
       * {
       box-sizing: border-box;

       }
       body {
       font-family: Roboto, Helvetica, sans-serif;

       }
       /* Fix the button on the left side of the page */
       .open-btn {
       display: flex;
       justify-content: left;
       }
       /* Style and fix the button on the page */
       .open-button {
       background-color: #1c87c9;
       color: white;
       padding: 12px 20px;
       border: none;
       border-radius: 5px;
       cursor: pointer;
       opacity: 0.8;
       position: fixed;
       }
       /* Position the Popup form */
       .login-popup {
       position: sticky;

       text-align: center;
       width: 100%;


       }
       /* Hide the Popup form */
       .form-popup {
       display: none;
       position: fixed;
       left: 45%;
       top:4%;
       transform: translate(-45%,5%);
       border: 1px solid #0080ff;
       z-index: 100;

       }
       /* Styles for the form container */
       .form-container {
        position: sticky;
       max-width: 300px;
       padding: 20px;
       background-color: #fff;
       }
       /* Full-width for input fields */
       .form-container input[type=text], .form-container input[type=password],.form-container input[type=number] {
       width: 100%;
       margin: 5px 0 10px 0;
       padding: 10px;
       border: none;
       background: #eee;
       }
       /* When the inputs get focus, do something */
       .form-container input[type=text]:focus, .form-container input[type=password]:focus ,.form-container input[type=number]:focus{
       background-color: #ddd;
       outline: none;

       }

       /* Style submit button */
       .form-container .btn {
       background-color: #0080ff;
       color: #fff;
       padding: 12px 20px;
       border: none;
       cursor: pointer;
       width: 100%;
       margin-bottom:10px;
       opacity: 0.8;
       }
       /* Style cancel button */
       .form-container .cancel {
       background-color: #cc0000;
       }
       /* Hover effects for buttons */
       .form-container .btn:hover, .open-button:hover {
       opacity: 1;
       }



     </style>
    <div id="wrapper">
        <nav class="navbar navbar-dark align-items-start sidebar sidebar-dark accordion bg-gradient-primary p-0">
            <div class="container-fluid d-flex flex-column p-0">
                <a class="navbar-brand d-flex justify-content-center align-items-center sidebar-brand m-0" href="#">
                    <div class="sidebar-brand-icon rotate-n-15"><i class="fas fa-laugh-wink"></i></div>
                    <div class="sidebar-brand-text mx-3"><span>Shallal</span></div>
                </a>
                <hr class="sidebar-divider my-0" />
                <ul class="nav navbar-nav text-light" id="accordionSidebar">
                    <li role="presentation" class="nav-item"><a class="nav-link" href="Cashier.php"><i class="fas fa-tachometer-alt"></i><span>Orders</span></a></li>
                </ul>
                <ul class="nav navbar-nav text-light" id="accordionSidebar">
                    <li role="presentation" class="nav-item"><a class="nav-link" href="OnlineOrders.php"><i class="fas fa-pizza-slice"></i><span>Online orders</span></a></li>
                </ul>
                <ul class="nav navbar-nav text-light" id="accordionSidebar"></ul>
<div style="text-algin:center; text-color:white;">



</div>

                <div class="text-center d-none d-md-inline"><button class="btn rounded-circle border-0" id="sidebarToggle" type="button"></button></div>
            </div>

        </nav>
        <div class="d-flex flex-column" id="content-wrapper">
            <div id="content">
                <nav class="navbar navbar-light navbar-expand bg-white shadow mb-4 topbar static-top">
                    <div class="container-fluid"><button class="btn btn-link d-md-none rounded-circle mr-3" id="sidebarToggleTop" type="button"><i class="fas fa-bars"></i></button>
                        <form class="form-inline d-none d-sm-inline-block mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
                            <div class="input-group"><input type="text" class="bg-light form-control border-0 small" placeholder="Search for ..." />
                                <div class="input-group-append"><button class="btn btn-primary py-0" type="button"><i class="fas fa-search"></i></button></div>
                            </div>
                        </form>
                        <ul class="nav navbar-nav flex-nowrap ml-auto">
                            <li class="nav-item dropdown d-sm-none no-arrow"><a data-toggle="dropdown" aria-expanded="false" class="dropdown-toggle nav-link" href="#"><i class="fas fa-search"></i></a>
                                <div role="menu" class="dropdown-menu dropdown-menu-right p-3 animated--grow-in" aria-labelledby="searchDropdown">
                                    <form class="form-inline mr-auto navbar-search w-100">
                                        <div class="input-group"><input type="text" class="bg-light form-control border-0 small" placeholder="Search for ..." />
                                            <div class="input-group-append"><button class="btn btn-primary py-0" type="button"><i class="fas fa-search"></i></button></div>
                                        </div>
                                    </form>
                                </div>
                            </li>
                            <li role="presentation" class="nav-item dropdown no-arrow mx-1">
                                <div class="nav-item dropdown no-arrow"><a data-toggle="dropdown" aria-expanded="false" class="dropdown-toggle nav-link" href="#"><span class="badge badge-danger badge-counter">3+</span><i class="fas fa-bell fa-fw"></i></a>
                                    <div role="menu" class="dropdown-menu dropdown-menu-right dropdown-list dropdown-menu-right animated--grow-in">
                                        <h6 class="dropdown-header">alerts center</h6>
                                        <a class="d-flex align-items-center dropdown-item" href="#">
                                            <div class="mr-3">
                                                <div class="bg-primary icon-circle"><i class="fas fa-file-alt text-white"></i></div>
                                            </div>
                                            <div><span class="small text-gray-500">December 12, 2019</span>
                                                <p>A new monthly report is ready to download!</p>
                                            </div>
                                        </a>
                                        <a class="d-flex align-items-center dropdown-item" href="#">
                                            <div class="mr-3">
                                                <div class="bg-success icon-circle"><i class="fas fa-donate text-white"></i></div>
                                            </div>
                                            <div><span class="small text-gray-500">December 7, 2019</span>
                                                <p>$290.29 has been deposited into your account!</p>
                                            </div>
                                        </a>
                                        <a class="d-flex align-items-center dropdown-item" href="#">
                                            <div class="mr-3">
                                                <div class="bg-warning icon-circle"><i class="fas fa-exclamation-triangle text-white"></i></div>
                                            </div>
                                            <div><span class="small text-gray-500">December 2, 2019</span>
                                                <p>Spending Alert: We&#39;ve noticed unusually high spending for your account.</p>
                                            </div>
                                        </a><a class="text-center dropdown-item small text-gray-500" href="#">Show All Alerts</a></div>
                                </div>
                            </li>
                            <li role="presentation" class="nav-item dropdown no-arrow mx-1">
                                <div class="nav-item dropdown no-arrow"><a data-toggle="dropdown" aria-expanded="false" class="dropdown-toggle nav-link" href="#"><i class="fas fa-envelope fa-fw"></i><span class="badge badge-danger badge-counter">7</span></a>
                                    <div role="menu" class="dropdown-menu dropdown-menu-right dropdown-list dropdown-menu-right animated--grow-in">
                                        <h6 class="dropdown-header">alerts center</h6>
                                        <a class="d-flex align-items-center dropdown-item" href="#">
                                            <div class="dropdown-list-image mr-3"><img class="rounded-circle" src="avatars/avatar4.jpeg" />
                                                <div class="bg-success status-indicator"></div>
                                            </div>
                                            <div class="font-weight-bold">
                                                <div class="text-truncate"><span>Hi there! I am wondering if you can help me with a problem I&#39;ve been having.</span></div>
                                                <p class="small text-gray-500 mb-0">Emily Fowler - 58m</p>
                                            </div>
                                        </a>
                                        <a class="d-flex align-items-center dropdown-item" href="#">
                                            <div class="dropdown-list-image mr-3"><img class="rounded-circle" src="avatars/avatar2.jpeg" />
                                                <div class="status-indicator"></div>
                                            </div>
                                            <div class="font-weight-bold">
                                                <div class="text-truncate"><span>I have the photos that you ordered last month!</span></div>
                                                <p class="small text-gray-500 mb-0">Jae Chun - 1d</p>
                                            </div>
                                        </a>
                                        <a class="d-flex align-items-center dropdown-item" href="#">
                                            <div class="dropdown-list-image mr-3"><img class="rounded-circle" src="avatars/avatar3.jpeg" />
                                                <div class="bg-warning status-indicator"></div>
                                            </div>
                                            <div class="font-weight-bold">
                                                <div class="text-truncate"><span>Last month&#39;s report looks great, I am very happy with the progress so far, keep up the good work!</span></div>
                                                <p class="small text-gray-500 mb-0">Morgan Alvarez - 2d</p>
                                            </div>
                                        </a>
                                        <a class="d-flex align-items-center dropdown-item" href="#">
                                            <div class="dropdown-list-image mr-3"><img class="rounded-circle" src="avatars/avatar5.jpeg" />
                                                <div class="bg-success status-indicator"></div>
                                            </div>
                                            <div class="font-weight-bold">
                                                <div class="text-truncate"><span>Am I a good boy? The reason I ask is because someone told me that people say this to all dogs, even if they aren&#39;t good...</span></div>
                                                <p class="small text-gray-500 mb-0">Chicken the Dog · 2w</p>
                                            </div>
                                        </a><a class="text-center dropdown-item small text-gray-500" href="#">Show All Alerts</a></div>
                                </div>
                                <div class="shadow dropdown-list dropdown-menu dropdown-menu-right" aria-labelledby="alertsDropdown"></div>
                            </li>
                            <div class="d-none d-sm-block topbar-divider"></div>
                            <li role="presentation" class="nav-item dropdown no-arrow">
                                <div class="nav-item dropdown no-arrow"><a data-toggle="dropdown" aria-expanded="false" class="dropdown-toggle nav-link" href="#"><span id="cfnameID" class="d-none d-lg-inline mr-2 text-gray-600 small">

                                  '. $y.'


                                 </span><img class="border rounded-circle img-profile" src="assets/img/avatars/avatar4.jpeg" /></a>
                                    <div
                                        role="menu" class="dropdown-menu shadow dropdown-menu-right animated--grow-in"><a role="presentation" class="dropdown-item" href="#"><i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i> Profile</a><a role="presentation" class="dropdown-item" href="#"><i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i> Settings</a>
                                        <a
                                            role="presentation" class="dropdown-item" href="#"><i class="fas fa-list fa-sm fa-fw mr-2 text-gray-400"></i> Activity log</a>
                                            <div class="dropdown-divider"></div><a class="dropdown-item" href="login.html"><i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i> Logout</a></div>
                    </div>
                    </li>
                    </ul>
            </div>
            </nav>
<!--
            <div class="container-fluid">';?>
<?php
$i = 0;
include 'conn.php';
echo '<form method="post" action="Order.php">';
$sqli = "SELECT name,CFID  FROM foodcategory";
$result = mysqli_query($conn, $sqli);
while($row =mysqli_fetch_array($result)){
$q = $row['CFID'];
echo '<div role="tablist"  id="acc'.$row['CFID'].'">
<div class = "card">
        <div role="tab" class="card-header">
            <h5 class="mb-0"><a collapse data-toggle="collapse" aria-expanded="false"  aria-controls="acc.'.$row['CFID'].' .item-1" href="#acc'.$row['CFID'].' .item-1"> '.$row['name'].'</a></h5>
        </div>
        <div  role="tabpanel" data-parent="#acc'.$row['CFID'].'" class="collapse show item-1">
            <div class="card-body">
';
                $sql2 = "SELECT name FROM fooditem where CFID = $q";
                $result2 = mysqli_query($conn, $sql2);
                while ($row5=mysqli_fetch_array($result2)) {

echo'<div>

<button type="button" class = "btn btn-primary" id="'.$row5['name'] .'"  name="'.$row5['name'] .'" value="'.$row5['name'] .'"   " style="margin: 12px;">'.$row5['name'] .'</button>
<input  id="h'.$row5['name'] .'" type="number"  name = "h'.$row5['name'].'" min="0" value="'.$row5['name'] .'" max ="99" step="1" style="width:40px"></input>
</div>
' ;
$i++;
}

              echo'
              </div>
        </div>
        </div>
  </div>';


}
echo '<button  type ="submit" class = "btn btn-primary" style="background-color:red; border-color:red;" >Print order</button>
</from>';




?>
-->


<!--

==========================================================================
-->
<form   method="post" action="addOrder.php"   id = "popwin"  class="form-container">
  <h2>Fill Order</h2>
   <?php

  include 'conn.php';
  echo '<select class = "btn btn-primary" style="background-Color:#000000" id="itemName" name="itemName">
      <option>Choose Food Item</option>';
  $sqli2 = "SELECT Name FROM fooditem where stsid = 100";
  $result2 = mysqli_query($conn, $sqli2);

  while ($row2 = mysqli_fetch_array($result2)) {
  echo '<option value="'.$row2['Name'].'">'.$row2['Name'].'</option>';
  }

  echo '</select>';
  $sql3 = "SELECT max(TID) as TID_T from transaction ";
  $result3 = $conn->query($sql3);
  $row3 = $result3->fetch_assoc();
  $TID = $row3['TID_T'];
  echo '<span id ="TID_show"class = "pull-right"> Transaction ID: '. $TID .'<span>';
  echo '<option hidden id = "cfnameid" name="cfnameid" value ="'.$y.'">'.$y.'</option>';
  ?>
  <div>
    <input type="number" id="QTY" name="QTY" placeholder="QTY" min="1" style="width:28%; padding:7%; font-size:8pt"/>
    <button type="submit" class="btn btn-primary"  style="width:33%; padding:2%;" id="add2Order" name="add2Order">add to order</button>

</div>






</form>
<form method = "post " action ="FinalizeOrder.php">
  <button type="submit" class="btn" style="background-color:#cc00c0">Finalize Order</button>
</form>


    <!--

===============================================================

  -->

<script>
function openForm() {
  document.getElementById("popupForm").style.display="block";
}

function closeForm() {
  document.getElementById("popupForm").style.display="none";
}

</script>



  <footer class="bg-white sticky-footer">
      <div class="container my-auto">
          <div class="text-center my-auto copyright"><span>Copyright © Brand 2019</span></div>
      </div>
    </div>
  </div>
  </footer>

  </div><a class="border rounded d-inline scroll-to-top" href="#page-top"><i class="fas fa-angle-up"></i></a></div>
  <script src="assets/js/jquery.min.js"></script>
  <script src="assets/bootstrap/js/bootstrap.min.js"></script>
  <script src="assets/js/chart.min.js"></script>
  <script src="assets/js/bs-init.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.js"></script>
  <script src="assets/js/JavaScript.js"></script>
  <script src="assets/js/theme.js"></script>
      <script src="assets/js/JavaScript.js"></script>
      <script src="assets/js/qwert5.js"></script>
      <script type="text/JavaScript" src="assets/js/jquery.js"></script>


</body>
</html>
