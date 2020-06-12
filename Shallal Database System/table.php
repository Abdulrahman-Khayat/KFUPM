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

<body id="page-top">
    <div id="wrapper">
        <nav class="navbar navbar-dark align-items-start sidebar sidebar-dark accordion bg-gradient-primary p-0">
            <div class="container-fluid d-flex flex-column p-0">
                <a class="navbar-brand d-flex justify-content-center align-items-center sidebar-brand m-0" href="#">
                    <div class="sidebar-brand-icon rotate-n-15"><i class="fas fa-laugh-wink"></i></div>
                    <div class="sidebar-brand-text mx-3"><span>Shallal</span></div>
                </a>
                <hr class="sidebar-divider my-0">
                <ul class="nav navbar-nav text-light" id="accordionSidebar">
                    <li class="nav-item" role="presentation"><a class="nav-link" href="index.php"><i class="fas fa-tachometer-alt"></i><span>Dashboard</span></a></li>
                </ul>
                <ul class="nav navbar-nav text-light" id="accordionSidebar">
                    <li class="nav-item" role="presentation"><a class="nav-link" href="foodCat.php"  ><i class="fas fa-pizza-slice"></i><span>Food Category</span></a></li>
                </ul>
                <ul class="nav navbar-nav text-light" id="accordionSidebar">
                    <li class="nav-item" role="presentation"><a class="nav-link"><i class="fas fa-pizza-slice"></i><span>Food</span></a></li>
                </ul>
                <ul class="nav navbar-nav text-light" id="accordionSidebar">
                    <li class="nav-item" role="presentation"><a class="nav-link" href="empTable.php"><i class="fas fa-user-alt"></i><span>Employees</span></a></li>
                </ul>
                <div class="text-center d-none d-md-inline"><button class="btn rounded-circle border-0" id="sidebarToggle" type="button"></button></div>
            </div>
        </nav>
        <div class="d-flex flex-column" id="content-wrapper">
            <div id="content">
                <nav class="navbar navbar-light navbar-expand bg-white shadow mb-4 topbar static-top">
                    <div class="container-fluid"><button class="btn btn-link d-md-none rounded-circle mr-3" id="sidebarToggleTop" type="button"><i class="fas fa-bars"></i></button>
                        <form class="form-inline d-none d-sm-inline-block mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
                            <div class="input-group"><input class="bg-light form-control border-0 small" type="text" placeholder="Search for ...">
                                <div class="input-group-append"><button class="btn btn-primary py-0" type="button"><i class="fas fa-search"></i></button></div>
                            </div>
                        </form>
                        <ul class="nav navbar-nav flex-nowrap ml-auto">
                            <li class="nav-item dropdown d-sm-none no-arrow"><a class="dropdown-toggle nav-link" data-toggle="dropdown" aria-expanded="false" href="#"><i class="fas fa-search"></i></a>
                                <div class="dropdown-menu dropdown-menu-right p-3 animated--grow-in" role="menu" aria-labelledby="searchDropdown">
                                    <form class="form-inline mr-auto navbar-search w-100">
                                        <div class="input-group"><input class="bg-light form-control border-0 small" type="text" placeholder="Search for ...">
                                            <div class="input-group-append"><button class="btn btn-primary py-0" type="button"><i class="fas fa-search"></i></button></div>
                                        </div>
                                    </form>
                                </div>
                            </li>
                            <li class="nav-item dropdown no-arrow mx-1" role="presentation">
                                <div class="nav-item dropdown no-arrow"><a class="dropdown-toggle nav-link" data-toggle="dropdown" aria-expanded="false" href="#"><span class="badge badge-danger badge-counter">3+</span><i class="fas fa-bell fa-fw"></i></a>
                                    <div class="dropdown-menu dropdown-menu-right dropdown-list dropdown-menu-right animated--grow-in"
                                        role="menu">
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
                                                <p>Spending Alert: We've noticed unusually high spending for your account.</p>
                                            </div>
                                        </a><a class="text-center dropdown-item small text-gray-500" href="#">Show All Alerts</a></div>
                                </div>
                            </li>
                            <li class="nav-item dropdown no-arrow mx-1" role="presentation">
                                <div class="nav-item dropdown no-arrow"><a class="dropdown-toggle nav-link" data-toggle="dropdown" aria-expanded="false" href="#"><i class="fas fa-envelope fa-fw"></i><span class="badge badge-danger badge-counter">7</span></a>
                                    <div class="dropdown-menu dropdown-menu-right dropdown-list dropdown-menu-right animated--grow-in"
                                        role="menu">
                                        <h6 class="dropdown-header">alerts center</h6>
                                        <a class="d-flex align-items-center dropdown-item" href="#">
                                            <div class="dropdown-list-image mr-3"><img class="rounded-circle" src="assets/img/avatars/avatar4.jpeg">
                                                <div class="bg-success status-indicator"></div>
                                            </div>
                                            <div class="font-weight-bold">
                                                <div class="text-truncate"><span>Hi there! I am wondering if you can help me with a problem I've been having.</span></div>
                                                <p class="small text-gray-500 mb-0">Emily Fowler - 58m</p>
                                            </div>
                                        </a>
                                        <a class="d-flex align-items-center dropdown-item" href="#">
                                            <div class="dropdown-list-image mr-3"><img class="rounded-circle" src="assets/img/avatars/avatar2.jpeg">
                                                <div class="status-indicator"></div>
                                            </div>
                                            <div class="font-weight-bold">
                                                <div class="text-truncate"><span>I have the photos that you ordered last month!</span></div>
                                                <p class="small text-gray-500 mb-0">Jae Chun - 1d</p>
                                            </div>
                                        </a>
                                        <a class="d-flex align-items-center dropdown-item" href="#">
                                            <div class="dropdown-list-image mr-3"><img class="rounded-circle" src="assets/img/avatars/avatar3.jpeg">
                                                <div class="bg-warning status-indicator"></div>
                                            </div>
                                            <div class="font-weight-bold">
                                                <div class="text-truncate"><span>Last month's report looks great, I am very happy with the progress so far, keep up the good work!</span></div>
                                                <p class="small text-gray-500 mb-0">Morgan Alvarez - 2d</p>
                                            </div>
                                        </a>
                                        <a class="d-flex align-items-center dropdown-item" href="#">
                                            <div class="dropdown-list-image mr-3"><img class="rounded-circle" src="assets/img/avatars/avatar5.jpeg">
                                                <div class="bg-success status-indicator"></div>
                                            </div>
                                            <div class="font-weight-bold">
                                                <div class="text-truncate"><span>Am I a good boy? The reason I ask is because someone told me that people say this to all dogs, even if they aren't good...</span></div>
                                                <p class="small text-gray-500 mb-0">Chicken the Dog · 2w</p>
                                            </div>
                                        </a><a class="text-center dropdown-item small text-gray-500" href="#">Show All Alerts</a></div>
                                </div>
                                <div class="shadow dropdown-list dropdown-menu dropdown-menu-right" aria-labelledby="alertsDropdown"></div>
                            </li>
                            <div class="d-none d-sm-block topbar-divider"></div>
                            <li class="nav-item dropdown no-arrow" role="presentation">
                                <div class="nav-item dropdown no-arrow"><a class="dropdown-toggle nav-link" data-toggle="dropdown" aria-expanded="false" href="#"><span class="d-none d-lg-inline mr-2 text-gray-600 small">Valerie Luna</span><img class="border rounded-circle img-profile" src="assets/img/avatars/avatar2.jpeg"></a>
                                    <div
                                        class="dropdown-menu shadow dropdown-menu-right animated--grow-in" role="menu"><a class="dropdown-item" role="presentation" href="#"><i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>&nbsp;Profile</a><a class="dropdown-item" role="presentation" href="#"><i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>&nbsp;Settings</a>
                                        <a
                                            class="dropdown-item" role="presentation" href="#"><i class="fas fa-list fa-sm fa-fw mr-2 text-gray-400"></i>&nbsp;Activity log</a>
                                            <div class="dropdown-divider"></div><a role="presentation" class="dropdown-item" href="login.html"><i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i> Logout</a></div>
                    </div>
                    </li>
                    </ul>
            </div>
            </nav>
            <div class="container-fluid">
                <h3 class="text-dark mb-4">Team</h3>
                <div class="card shadow">
                    <div class="card-header py-3">
                        <p class="text-primary m-0 font-weight-bold">Food Items</p>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-6 text-nowrap">
                                <div id="dataTable_length" class="dataTables_length" aria-controls="dataTable"><label>Show&nbsp;<select class="form-control form-control-sm custom-select custom-select-sm"><option value="10" selected="">10</option><option value="25">25</option><option value="50">50</option><option value="100">100</option></select>&nbsp;</label></div>
                            </div>
                            <div class="col-md-6">
                                <div class="text-md-right dataTables_filter" id="dataTable_filter">
<!--
modal start
-->
<div>
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

 <button class="btn btn-primary" onclick="openForm()"><strong>+ Add Item</strong></button>
 <button class="btn btn-primary" onclick="openFormEdit()" style="background-color: #ffbf00 ; border-color: #ffbf00"  ><strong>EDIT</strong></button>
 <button class="btn btn-primary" onclick="openFormDelete()" style="background-color: red ; border-Color:red"><strong>Delete</strong></button>
<!--
this is sparta
!-->
<div  class="login-popup">
      <div class="form-popup" id="popupForm">
        <form  method = "post" id = "popwin" scrolling="yes" action="additem.php" class="form-container">
          <h2>Fill item info</h2>

          <input type="text" id="addNewItem" placeholder="item name" name="addNewItem" required>
          <br>
          <input type="number" id="ItemPrice" placeholder="Price" name="ItemPrice" min="0" step="0.50" required>
          <br>
          <input type="text" id="ItemDescr" placeholder="Description" name="ItemDescr" required>


           <?php
include 'conn.php';


          echo '<select class = "btn btn-primary" style="background-Color:#000000"  id ="itemCat" name="itemCat">
<option>Choose Category</option>
          ';

          $x = 1;
          $sqli = "SELECT name FROM foodcategory";
          $result = mysqli_query($conn, $sqli);

          while ($row = mysqli_fetch_array($result)) {
          echo '<option  value="'.$row['name'].'">'.$row['name'].'</option>';

          }

          echo '</select>';

          ?>
          <?php
        include 'conn.php';

           $x = 1;
          echo '<select class = "btn btn-primary" style="background-Color:#000000" id="itemSTS" name="itemSTS">
<option>Choose Food Status</option>';

          $sqli = "SELECT SName FROM status where ststid = 1";
          $result = mysqli_query($conn, $sqli);

          while ($row = mysqli_fetch_array($result)) {
          echo '<option value="'.$row['SName'].'">'.$row['SName'].'</option>';
          }

          echo '</select>';

          ?>


          <button type="submit" class="btn"  onclick="closeForm()" style="background-color:#cc00c0">Submit</button>
          <button type="button" class="btn cancel" onclick="closeForm()">Cancel</button>
        </form>
      </div>
    </div>




<!--
this is sparta
!-->
<!-- ///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////-->
<div  class="login-popup" >
      <div class="form-popup" id="EditForm" >
        <form  method = "post" id = "Editpop" scrolling="yes" action="EditItem.php" class="form-container" focus>
          <h4>Update item </h4>


          <div style="text-align:left">
            <input type="text" id="ItemID" placeholder="item ID" name="ItemID" required style="width: 60%; text-align: left">
            <button  type ="button"class="btn btn-primary" style="width: 35%">Check</button>

           </div>

          <input type="text" id="ItemName" placeholder="item name" name="ItemName" required>
          <br>
          <input type="number" id="ItemPrice" placeholder="Price" name="ItemPrice" min="0" step="0.50" required>
          <br>
          <input type="text" id="ItemDescr" placeholder="Description" name="ItemDescr" required>


           <?php

        include 'conn.php';


          echo '<select class = "btn btn-primary" style="background-Color:#000000"  id ="itemCat" name="itemCat">
<option>Choose Category</option>
          ';


          $sqli = "SELECT name FROM foodcategory";
          $result = mysqli_query($conn, $sqli);

          while ($row = mysqli_fetch_array($result)) {
          echo '<option  value="'.$row['name'].'">'.$row['name'].'</option>';

          }

          echo '</select>';
          $conn->close();
          ?>


          <?php
        include 'conn.php';


          echo '<select  class = "btn btn-primary" style="background-Color:#000000" id="itemSTS" name="itemSTS">
                <option>Choose Food Status</option>';

          $sqli = "SELECT SName FROM status where ststid = 1";
          $result = mysqli_query($conn, $sqli);

          while ($row = mysqli_fetch_array($result)) {

          echo '<option value="'.$row['SName'].'">'.$row['SName'].'</option>';
          }

          echo '</select>';
          $conn->close();
          ?>

<!-- =======================================================================================================================-->



          <input type="submit" class="btn"  onclick="closeFormedit()" style="background-color:#cc00c0"></input>
          <button type="button" class="btn cancel" onclick="closeFormEdit()">Cancel</button>
        </form>
      </div>
    </div>






<!--
the delete function button`


!-->
<div  class="login-popup" >
      <div class="form-popup" id="DeleteForm" >
        <form  method = "post" id = "Editpop" scrolling="yes" action="DeleteItem.php" class="form-container" focus>
          <h4>Update item </h4>


          <div style="text-align:left">
            <input type="text" id="ItemIDDelete" placeholder="item ID" name="ItemIDDelete" required style="width: 60%; text-align: left">


           </div>



<!-- =======================================================================================================================-->



          <input type="submit" class="btn"  onclick="closeFormDelete()" style="background-color:#cc00c0"></input>
          <button type="button" class="btn cancel" onclick="closeFormDelete()">Cancel</button>
        </form>
      </div>
    </div>


    <!--
    the delete function button`


    !-->


     <script>
       function openForm() {
         document.getElementById("popupForm").style.display="block";
       }

       function closeForm() {
         document.getElementById("popupForm").style.display="none";
       }

       function openFormEdit() {

         document.getElementById("EditForm").style.display="block";

       }

       function closeFormEdit() {
         document.getElementById("EditForm").style.display="none";
       }

       function check(){

}

function openFormDelete(){
  document.getElementById("DeleteForm").style.display="block";



}
function closeFormDelete() {
  document.getElementById("DeleteForm").style.display="none";
}



    </script>





</div>






<!--modal end-->




                              </div>                            </div>
                        </div>

                        <div class="table-responsive table mt-2" id="dataTable" role="grid" aria-describedby="dataTable_info">
    <table class="table dataTable my-0" id="dataTable">
        <thead>
            <tr>
                <th width="10.6%">FID</th>
                <th width ="17.4%">Name</th>
                <th width ="12.4%">Category<th>
                <th width ="13.5%">Price</th>
                <th width ="32.8%">Description</th>
                <th width ="13.3%">Status</th>
            </tr>
        </thead>
        <tbody>

                  <?php


      include 'conn.php';
          $sql = "SELECT f.FID, f.name, c.Name as cname,f.Price,f.Descr, s.SName FROM fooditem as f join Status as s  on f.StsID = s.StsID join foodcategory as c on f.CFID = c.CFID";
          $result = $conn->query($sql);
          if ($result->num_rows > 0) {
            echo "<table class=\"table dataTable my-0\">";
          while($row = $result->fetch_assoc()) {
          echo "<tr>
          <td width = \"10.6%\" >" . $row["FID"] . "</td>
          <td width = \"17.7%\">" . $row["name"] . "</td>
          <td width = \"13.3%\">". $row["cname"]. "</td>
          <td width = \"13.3%\">". $row["Price"]."</td>
          <td width = \"31.8%\">".$row["Descr"]."</td>
          <td width = \"13.3%\">".$row["SName"]."</td></tr>" ;
          }
          echo "</table>";
          } else { echo "0 results"; }
          $conn->close();

          ?>


        </tbody>
        </table>
</div>
                        <div class="row">
                            <div class="col-md-6 align-self-center">
                                <p id="dataTable_info" class="dataTables_info" role="status" aria-live="polite">Showing 1 to 10 of 27</p>
                            </div>
                            <div class="col-md-6">
                                <nav class="d-lg-flex justify-content-lg-end dataTables_paginate paging_simple_numbers">
                                    <ul class="pagination">
                                        <li class="page-item disabled"><a class="page-link" href="#" aria-label="Previous"><span aria-hidden="true">«</span></a></li>
                                        <li class="page-item active"><a class="page-link" href="#">1</a></li>
                                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                                        <li class="page-item"><a class="page-link" href="#" aria-label="Next"><span aria-hidden="true">»</span></a></li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <footer class="bg-white sticky-footer">
            <div class="container my-auto">
                <div class="text-center my-auto copyright"><span>Copyright © Brand 2019</span></div>
            </div>
        </footer>
    </div><a class="border rounded d-inline scroll-to-top" href="#page-top"><i class="fas fa-angle-up"></i></a></div>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/chart.min.js"></script>
    <script src="assets/js/bs-init.js"></script>
    <script src="assets/js/Burger-Menu.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.js"></script>
    <script src="assets/js/JavaScript.js"></script>
    <script src="assets/js/theme.js"></script>
      <script src="assets/js/qwert5.js"></script>
      <script type="text/JavaScript" src="js/jquery.js"></script>
</body>

</html>
