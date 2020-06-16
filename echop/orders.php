<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Table - Brand</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i">
    <link rel="stylesheet" href="assets/fonts/fontawesome-all.min.css">
    <link rel="stylesheet" href="assets/fonts/ionicons.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.10.0/baguetteBox.min.css">
    <link rel="stylesheet" href="assets/css/smoothproducts.css">
    <link rel="stylesheet" href="assets/css/untitled.css">
</head>

<body id="page-top">
    <nav class="navbar navbar-light navbar-expand-lg fixed-top bg-white clean-navbar">
        <div class="container"><a class="navbar-brand logo" href="#">SWE363-project</a><button data-toggle="collapse" class="navbar-toggler" data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse"
                id="navcol-1">
                <form class="form-inline search-form" style="margin-bottom: 0;margin-top: 0;margin-right: 0;margin-left: 20%;">
                    <div class="input-group">
                        <div class="input-group-prepend"></div><input class="border rounded form-control" type="text" placeholder="I am looking for..">
                        <div class="input-group-append"><button class="btn btn-light border rounded" type="button"><i class="fa fa-search"></i></button></div>
                    </div>
                </form>
                <ul class="nav navbar-nav ml-auto">
                    <li class="nav-item" role="presentation"><a class="nav-link" href="<?php $val = $_GET["id"]; echo "indexLogged.php?id=$val";?>">Home</a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link" href="contact-us.html">Contact Us</a></li>
                    <li class="nav-item" role="presentation" href="shopping-cart.html"><a class="nav-link" href="shopping-cart.html"><i class="fas fa-shopping-cart"></i></a></li>
                </ul>
            </div>
            <nav class="navbar navbar-light navbar-expand-lg fixed-top bg-white clean-navbar">
                <div class="container"><a class="navbar-brand logo" href="<?php $val = $_GET["id"]; echo "indexLogged.php?id=$val";?>">ESHOP</a><button data-toggle="collapse" class="navbar-toggler" data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
                    <div class="collapse navbar-collapse"
                        id="navcol-1">
                        <form class="form-inline search-form" style="margin-bottom: 0;margin-top: 0;margin-right: 0;margin-left: 20%;">
                            <div class="input-group">
                                <div class="input-group-prepend"></div><input class="border rounded form-control" type="text" placeholder="I am looking for..">
                                <div class="input-group-append"><button class="btn btn-light border rounded" type="button"><i class="fa fa-search"></i></button></div>
                            </div>
                        </form>
                        <ul class="nav navbar-nav ml-auto">
                            <li class="nav-item" role="presentation"><a class="nav-link" href="<?php $val = $_GET["id"]; echo "indexLogged.php?id=$val";?>">Home</a></li>
                            <li class="nav-item" role="presentation"><a class="nav-link" href="contact-us.html">Contact Us</a></li>
                            <li class="nav-item dropdown no-arrow" role="presentation" style="padding-right: 4px;">
                                <div class="nav-item dropdown no-arrow"><a class="dropdown-toggle nav-link" data-toggle="dropdown" aria-expanded="false" href="#"><span class="d-none d-lg-inline mr-2 text-gray-600 small" style="font-size: 12px;color: rgb(0,0,0);">
                                
                                <?php
                                
                                    include "connect.php";
                                    $val = $_GET["id"];
                                    
                                    $sql = "SELECT customer_name FROM customer WHERE customer_ID = $val";
                                    $result = mysqli_query($conn,$sql);
                                    if(mysqli_num_rows($result) >0){
                                        $row = mysqli_fetch_array($result);
                                        echo $row["customer_name"];
                                    }                    

                                ?>

                                
                                </span></a>
                                    <div
                                        class="dropdown-menu shadow dropdown-menu-right animated--grow-in" role="menu"><a class="dropdown-item" role="presentation" href="profile.php?id=2"><i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>&nbsp;Profile</a>
                                        <div class="dropdown-divider"></div><a class="dropdown-item" role="presentation" href="index.php"><i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>&nbsp;Logout</a></div>
                    </div>
                    </li>
                    <?php
                        $val = $_GET["id"];
                    echo'<li class="nav-item" role="presentation" style="padding-right: 0px;"><a class="nav-link" style="padding: 0;"><button class="btn btn-primary" type="button" onclick="window.location=\'addToCart.php?id='.$val.'\'"><i class="fas fa-shopping-cart" ></i></button></a></li>';
                    
                    
                    ?>
                    </ul>
                </div>
        </div>
        </nav>
        </div>
    </nav>




    <div id="wrapper">
        <div class="d-flex flex-column" id="content-wrapper">
            <div id="content">
                <div class="container-fluid" style="margin-top: 15%;">
                    <h3 class="text-dark mb-4" style="margin:0;">Orders</h3>
                    <div class="card shadow">
                        <div class="card-header py-3">
                            <p class="text-primary m-0 font-weight-bold">Orders Info</p>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive table mt-2" id="dataTable" role="grid" aria-describedby="dataTable_info">
                                <table class="table dataTable my-0" id="staffTable">
                                    <thead>
                                        <tr>
                                            <th>Order ID</th>
                                            <th>Total</th>
                                            <th>Status</th>
                                            <th>Date</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                      
                                    <?php
                                        include "connect.php";
                                        $val = $_GET["id"];
                                        $tranID = 0;
                                        $sql = "SELECT * FROM transaction WHERE customer_ID = $val order by tran_date desc";
                                        $result = mysqli_query($conn,$sql);
                                        if(mysqli_num_rows($result) > 0){
                                            while($row = mysqli_fetch_array($result)){
                                                $sqlSts = "SELECT sts_name From status where status_ID = $row[status]";
                                                $result2 = mysqli_query($conn,$sqlSts); 
                                                if(mysqli_num_rows($result2) > 0){
                                                    $row2 = mysqli_fetch_array($result2);

                                                

                                            



                                   echo '<tr>
                                           

                                            <td>'.$row["TID"].'</td>
                                            <td>'.$row["total"].'</td>
                                            <td>'.$row2["sts_name"].'</td>
                                            <td>'.$row["tran_date"].'</td>';
                                            if($row["status"] == 36)
                                            echo'<td style="width: 30%;"><button class="btn btn-primary btn" type="button" onclick="window.location=\'CancelOrder.php?id='.$row["TID"].'&&name='.$val.' \'"  style="background-color: rgb(255,49,36);">Cancel</button></td>
                                        </tr>';
                                        }
                                    }
                                }
                                        ?>
                                    </tbody>
                                    <tfoot>
                                        <tr>
                                            <td><strong>Order ID</strong></td>
                                            <td><strong>Total</strong></td>
                                            <td><strong>Status</strong></td>
                                            <td><strong>Date</strong></td>
                                            <td><strong>Action</strong></td>
                                        </tr>
                                    </tfoot>
                                </table>
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
        </div>
    </div><div class="modal fade" id="modalContactForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
  aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header text-center">
        <h4 class="modal-title w-100 font-weight-bold">Add Staff</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body mx-3">
        <div class="md-form mb-3">
            <label data-error="wrong" data-success="right" for="form34">Staff name</label>
            <input type="text" id="Sname" class="form-control validate">
        </div>

        <div class="md-form mb-3">
             <label data-error="wrong" data-success="right" for="form29">Join date</label>
          <input type="email" id="Jdate" class="form-control validate">
         
        </div>

        <div class="md-form mb-3">
          <label data-error="wrong" data-success="right" for="form32">Salary</label>
          <input type="number" min="1" id="Salary" class="form-control validate">
         
        </div>

        <div class="md-form">
            <label data-error="wrong" data-success="right" for="form8">Phone</label>
          <input type="tel" id="Phone" class="md-textarea form-control" rows="4">
        
        </div>

      </div>
      <div class="modal-footer d-flex justify-content-center">
        <button class="btn btn-primary" onclick="addStaff()">Add </button>
      </div>
    </div>
  </div>
</div>


    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.js"></script>
    <script src="assets/js/script.js"></script>
    <script src="assets/js/Scripting.js"></script>
    <script src="assets/js/theme.js"></script>
</body>

</html>