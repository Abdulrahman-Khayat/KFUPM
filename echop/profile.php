<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Profile - Brand</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i">
    <link rel="stylesheet" href="assets/fonts/fontawesome-all.min.css">
    <link rel="stylesheet" href="assets/fonts/font-awesome.min.css">
    <link rel="stylesheet" href="assets/fonts/fontawesome5-overrides.min.css">
    <link rel="stylesheet" href="assets/css/untitled.css">
    <script src="assets/js/jquery.min.js"></script>

</head>

<body id="page-top">
    <nav class="navbar navbar-light navbar-expand-lg fixed-top bg-white clean-navbar">
        <div class="container"><a class="navbar-brand logo" href="#">SWE363-project</a><button data-toggle="collapse" class="navbar-toggler" data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse"
                id="navcol-1">
   
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
                                        class="dropdown-menu shadow dropdown-menu-right animated--grow-in" role="menu"><a class="dropdown-item" role="presentation" href="#"><i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>&nbsp;Profile</a>
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
                    <h3 class="text-dark mb-4" ></h3>
                    <div class="row mb-3">
                        <div class="col-lg-8">
                            <div class="row mb-3 d-none">
                                <div class="col">
                                    <div class="card text-white bg-primary shadow">
                                        <div class="card-body">
                                            <div class="row mb-2">
                                                <div class="col">
                                                    <p class="m-0">Peformance</p>
                                                    <p class="m-0"><strong>65.2%</strong></p>
                                                </div>
                                                <div class="col-auto"><i class="fas fa-rocket fa-2x"></i></div>
                                            </div>
                                            <p class="text-white-50 small m-0"><i class="fas fa-arrow-up"></i>&nbsp;5% since last month</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="card text-white bg-success shadow">
                                        <div class="card-body">
                                            <div class="row mb-2">
                                                <div class="col">
                                                    <p class="m-0">Peformance</p>
                                                    <p class="m-0"><strong>65.2%</strong></p>
                                                </div>
                                                <div class="col-auto"><i class="fas fa-rocket fa-2x"></i></div>
                                            </div>
                                            <p class="text-white-50 small m-0"><i class="fas fa-arrow-up"></i>&nbsp;5% since last month</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <div class="card shadow mb-3">
                                        <div class="card-header py-3">
                                            <p class="text-primary m-0 font-weight-bold">User Settings</p>
                                        </div>
                                        <div class="card-body">

                                            <form method="post" action="changeProfile.php?id=<?php  echo $_GET["id"];  ?>">
                                                <div class="form-row">
                                                    <div class="col">
                                                        <div class="form-group"><label for="email"><strong>Email Address</strong></label><input class="form-control" type="email" id="email" placeholder="user@example.com" value="<?php include "connect.php"; $_GET["id"]; 
                                                            $sql = "SELECT customer_email from customer where customer_ID = $val";
                                                            $result = mysqli_query($conn,$sql);
                                                            if(mysqli_num_rows($result) >0){
                                                                $row = mysqli_fetch_array($result);
                                                                echo $row["customer_email"];
                                                            }
                                                        
                                                        ?>" name="email"></div>
                                                    </div>
                                                </div>
                                                <div class="form-row">
                                                    <div class="col">
                                                        <div class="form-group"><label for="first_name"><strong>Name</strong></label><input class="form-control" type="text" id="name" placeholder="John"  value="<?php include "connect.php"; $_GET["id"]; 
                                                            $sql = "SELECT customer_name from customer where customer_ID = $val";
                                                            $result = mysqli_query($conn,$sql);
                                                            if(mysqli_num_rows($result) >0){
                                                                $row = mysqli_fetch_array($result);
                                                                echo $row["customer_name"];
                                                            }
                                                        
                                                        ?> " name="name"></div>
                                                    </div>
                                                </div>
                                                <div class="form-row">
                                                    <div class="col">
                                                        <div class="form-group"><label for="first_name"><strong>Password</strong></label><input class="form-control" type="password" id="password" name="password" placeholder="password"></div>
                                                    </div>
                                                </div>
                                                <div class="form-group"><button class="btn btn-primary btn-sm" type="submit">Save Settings</button></div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <footer class="bg-white sticky-footer">
                <div class="container my-auto">
                    <div class="text-center my-auto copyright"><span>Copyright © Brand 2020</span></div>
                </div>
            </footer>
        
        <script>
            $(document).ready(function(){


                query = <?php echo $_GET["id"];?>;
                
                
                
                $.ajax({

                        url:"showProfile.php",
                        method:"POST",
                        data:{query:query},
                        dataType: 'json',
                        success:function(data){
                            $("#name").val(data[0]);
                            $("#email").val(data[1]);

                            
                            
                        }
                    });



            });

        </script>



    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.js"></script>
    <script src="assets/js/theme.js"></script>
</body>

</html>