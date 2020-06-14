
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Shopping Cart - Brand</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat:400,400i,700,700i,600,600i">
    <link rel="stylesheet" href="assets/fonts/fontawesome-all.min.css">
    <link rel="stylesheet" href="assets/fonts/font-awesome.min.css">
    <link rel="stylesheet" href="assets/fonts/simple-line-icons.min.css">
    <link rel="stylesheet" href="assets/fonts/fontawesome5-overrides.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.10.0/baguetteBox.min.css">
    <link rel="stylesheet" href="assets/css/Pretty-Search-Form.css">
    <link rel="stylesheet" href="assets/css/smoothproducts.css">
    <link rel="stylesheet" href="assets/css/Styling.css">
</head>

<body>
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
                <?php
                          $val = $_GET["id"];
                          echo'  <li class="nav-item" role="presentation"><a class="nav-link" href="indexLogged.php?id='.$val.'">Home</a></li>';
                          ?>
                    <li class="nav-item" role="presentation"><a class="nav-link" href="contact-us.html">Contact Us</a></li>
                    <li class="nav-item" role="presentation" href="shopping-cart.html"><a class="nav-link" href="shopping-cart.html"><i class="fas fa-shopping-cart"></i></a></li>
                </ul>
            </div>
            <nav class="navbar navbar-light navbar-expand-lg fixed-top bg-white clean-navbar">
                <div class="container"><a class="navbar-brand logo" href="indexLogged.php">ESHOP</a><button data-toggle="collapse" class="navbar-toggler" data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
                    <div class="collapse navbar-collapse"
                        id="navcol-1">
                        <form class="form-inline search-form" style="margin-bottom: 0;margin-top: 0;margin-right: 0;margin-left: 20%;">
                            <div class="input-group">
                                <div class="input-group-prepend"></div><input class="border rounded form-control" type="text" placeholder="I am looking for..">
                                <div class="input-group-append"><button class="btn btn-light border rounded" type="button"><i class="fa fa-search"></i></button></div>
                            </div>
                        </form>
                        <ul class="nav navbar-nav ml-auto">
                        <?php
                          $val = $_GET["id"];
                          echo'  <li class="nav-item" role="presentation"><a class="nav-link" href="indexLogged.php?id='.$val.'">Home</a></li>';
                          ?>
                            <li class="nav-item" role="presentation"><a class="nav-link" href="contact-us.html">Contact Us</a></li>
                            <li class="nav-item dropdown no-arrow" role="presentation" style="padding-right: 4px;">
                            <li class="nav-item" role="presentation"><a class="nav-link" href="<?php $val = $_GET["id"]; echo "orders.php?id=$val";?>">Orders</a></li>

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
                                        class="dropdown-menu shadow dropdown-menu-right animated--grow-in" role="menu"><a class="dropdown-item" role="presentation" href="<?php $val = $_GET["id"]; echo "profile.php?id=$val";?>"><i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>&nbsp;Profile</a>
                                        <div class="dropdown-divider"></div><a class="dropdown-item" role="presentation" href="index.php"><i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>&nbsp;Logout</a></div>
                    </div>
                    </li>
                    <li class="nav-item" role="presentation" style="padding-right: 0px;"><a class="nav-link" style="padding: 0;"><button class="btn btn-primary" type="button" onclick="myCart(this)"><i class="fas fa-shopping-cart" onclick="cart()"></i></button></a></li>
                    </ul>
                </div>
        </div>
        </nav>
        </div>
    </nav>
    <main class="page shopping-cart-page">
        <section class="clean-block clean-cart dark">
            <div class="container">
                <div class="block-heading">
                    <h2 class="text-info">Shopping Cart</h2>
                </div>
                <div class="content">
                    <div class="row no-gutters">
                    
                        <div class="col-md-12 col-lg-8">
                            <!-- ITEMS ------------------->
                            <?php
                                include "connect.php";
                                $val = $_GET["id"];
                                $sql = "SELECT * FROM cart WHERE Customer_ID = $val";
                                $result = mysqli_query($conn,$sql);
                                if($result)
                                if(mysqli_num_rows($result)>0){
                                    while($row = mysqli_fetch_array($result)){
                                        $pName = "SELECT * FROM products where product_ID = $row[product_ID]";
                                        $result2 = mysqli_query($conn,$pName);
                                        if(mysqli_num_rows($result2)>0){
                                            $row2 = mysqli_fetch_array($result2);
                                        

                           echo'<div class="items">
                                <div id="productDiv" class="product">
                                    <div class="row justify-content-center align-items-center">
                                        <div class="col-md-3">
                                      <div class="product-image"><img class="img-fluid d-block mx-auto image" src="data:image/jpeg;base64,'.base64_encode($row2["image"]).'"></div>
                                        </div>
                                        <div class="col-md-5 product-info"><a class="product-name" href="#">'.$row2["product_name"].'</a>
                                            <div class="product-specs">
                                                <div><span>Display:&nbsp;</span><span class="value">'.$row2["display"].' inch</span></div>
                                                <div><span>RAM:&nbsp;</span><span class="value">'.$row2["ram"].'GB</span></div>
                                                <div><span>Memory:&nbsp;</span><span class="value">'.$row2["size"].'GB</span></div>
                                                <div><span>Quantity:&nbsp;</span><span class="value">'.$row["Quantity"].'</span></div>
                                                <div><a href="deleteFromCart.php?id='.$row["product_ID"].'&&name='.$val.'"><span style="color:red; font-weight:bold;"><br><br><br>Delete&nbsp;</span></a></div>
                                            </div>
                                        </div>
                                        <div class="col-6 col-md-2 price"><span>$'.$row2["price"].'</span></div>
                                    </div>
                                </div>
                            </div>';
                                        }
                            }
                        }
                            ?>
                           <!-- ITEMS_----------------------------> 
                        </div>
                        <div class="col-md-12 col-lg-4">
                            <div class="summary">
                                <h3>Summary</h3>
                                <?php
                                    include "connect.php";
                                    $val = $_GET["id"];
                                    $total = 0;
                                    
                                    $sql = "SELECT total FROM cart where Customer_ID = $val";
                                    $result = mysqli_query($conn,$sql);
                                    if(mysqli_num_rows($result) > 0){
                                        while($row = mysqli_fetch_array($result)){
                                            $total += $row["total"];
                                        }
                                    }

                                        
                                        $checkOut = $total + 10;
                                echo' <h4><span class="text">Subtotal</span><span class="price">$'.$total.'</span></h4>
                                 <h4><span class="text">Shipping</span><span class="price">$10</span></h4>
                                 <h4><span class="text">Total</span><span class="price">$'.$checkOut.'</span></h4>
                                 <button class="btn btn-primary btn-block btn-lg" type="button"  onclick="window.location=\'addOrder.php?id='.$val.'\'" >Checkout</button>';
                                
                                ?>
                                
                                </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
    <footer class="page-footer dark">
        <div class="footer-copyright">
            <p>© 2018 Copyright Text</p>
        </div>
    </footer>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.10.0/baguetteBox.min.js"></script>
    <script src="assets/js/smoothproducts.min.js"></script>
    <script src="assets/js/theme.js"></script>
</body>

</html>