<?php
session_start();
?>


<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Product - Brand</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat:400,400i,700,700i,600,600i">
    <link rel="stylesheet" href="assets/fonts/fontawesome-all.min.css">
    <link rel="stylesheet" href="assets/fonts/font-awesome.min.css">
    <link rel="stylesheet" href="assets/fonts/simple-line-icons.min.css">
    <link rel="stylesheet" href="assets/fonts/fontawesome5-overrides.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.10.0/baguetteBox.min.css">
    <link rel="stylesheet" href="assets/css/Pretty-Search-Form.css">
    <link rel="stylesheet" href="assets/css/smoothproducts.css">
</head>

<body>
<nav class="navbar navbar-light navbar-expand-lg fixed-top bg-white clean-navbar">
        <div class="container"><a class="navbar-brand logo" href="#">SWE363-project</a><button data-toggle="collapse" class="navbar-toggler" data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse"
                id="navcol-1">
                <form class="form-inline search-form" style="margin-bottom: 0;margin-top: 0;margin-right: 0;margin-left: 20%;">
                    <div class="input-group">
                        <div class="input-group-prepend"></div><input class="border rounded form-control search" id="search" name="search" type="text" placeholder="I am looking for..">
                        <div class="input-group-append"><button class="btn btn-light border rounded" type="button"><i class="fa fa-search"></i></button></div>
                    </div>
                </form>
                <ul class="nav navbar-nav ml-auto">
                    <li class="nav-item" role="presentation"><a class="nav-link" href="<?php $val = $_SESSION["customer_ID"];  echo "indexLogged.php?id=$val";?>">Home</a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link" href="contact-us.html">Contact Us</a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link" href="<?php $val = $_SESSION["customer_ID"]; echo "orders.php?id=$val";?>">Orders</a></li>
                    <li class="nav-item" role="presentation" href="shopping-cart.html"><a class="nav-link" href="<?php $val = $_GET["id"]; echo "cart.php?id=$val";?>"><i class="fas fa-shopping-cart"></i></a></li>
                </ul>
            </div>
            <nav class="navbar navbar-light navbar-expand-lg fixed-top bg-white clean-navbar">
                <div class="container"><a class="navbar-brand logo" href="<?php $val = $_GET["id"]; echo "indexLogged.php?id=$val";?>">ESHOP</a><button data-toggle="collapse" class="navbar-toggler" data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
                    <div class="collapse navbar-collapse"
                        id="navcol-1">
                        <form class="form-inline search-form" style="margin-bottom: 0;margin-top: 0;margin-right: 0;margin-left: 20%;">
                            <div class="input-group">
                                <div class="input-group-prepend"></div><input class="border rounded form-control search" id ="search" name="search" type="text" placeholder="I am looking for..">
                                <div class="input-group-append"><button class="btn btn-light border rounded" type="button"><i class="fa fa-search"></i></button></div>
                            </div>
                        </form>
                        <ul class="nav navbar-nav ml-auto">
                            <li class="nav-item" role="presentation"><a class="nav-link" href="<?php $val = $_SESSION["customer_ID"];  echo "indexLogged.php?id=$val";?>">Home</a></li>
                            <li class="nav-item" role="presentation"><a class="nav-link" href="contact-us.html">Contact Us</a></li>
                            <li class="nav-item" role="presentation"><a class="nav-link" href="<?php $val = $_SESSION["customer_ID"];  echo "orders.php?id=$val";?>">Orders</a></li>

                            <li class="nav-item dropdown no-arrow" role="presentation" style="padding-right: 4px;">
                                <div class="nav-item dropdown no-arrow"><a class="dropdown-toggle nav-link" data-toggle="dropdown" aria-expanded="false" href="<?php $val = $_GET["id"]; echo "cart.php?id=$val";?>"><span class="d-none d-lg-inline mr-2 text-gray-600 small" style="font-size: 12px;color: rgb(0,0,0);">
                                
                                <?php
                                    echo $_SESSION["customer_name"];
                                    
                                    // include "connect.php";
                                    // $val = $_GET["id"];
                                    // $sql = "SELECT customer_name FROM customer WHERE customer_ID = $val";
                                    // $result = mysqli_query($conn,$sql);
                                    // if(mysqli_num_rows($result) >0){
                                    //     $row = mysqli_fetch_array($result);
                                    //     echo $row["customer_name"];
                                    // }                    

                                ?>

                                
                                </span></a>
                                    <div
                                        class="dropdown-menu shadow dropdown-menu-right animated--grow-in" role="menu"><a class="dropdown-item" role="presentation" href="<?php $val = $_SESSION["customer_ID"];  echo "profile.php?id=$val";?>"><i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>&nbsp;Profile</a>
                                        <div class="dropdown-divider"></div><a class="dropdown-item" role="presentation" href="<?php $val = $_SESSION["customer_ID"];  echo "indexLogged.php?id=$val";?>"><i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>&nbsp;Logout</a></div>
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
    <main class="page product-page">
        <section class="clean-block clean-product dark">
            <div class="container">
               
                <div class="block-content">
                    <div class="product-info">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="gallery">
                                    <div class="sp-wrap">
                                    <?php
                                    session_start();
                                    include "connect.php";
                                    $val = $_GET['id'];
                                    $sql = "SELECT * fROM products WHERE product_ID = $val";
                                    $result = mysqli_query($conn,$sql);
                                    if(mysqli_num_rows($result) > 0){
                                        $row = mysqli_fetch_array($result);
                                   
                                   echo' <a  href="data:image/jpeg;base64,'.base64_encode($row["image"]).'"><img class="img-fluid d-block mx-auto"  src="data:image/jpeg;base64,'.base64_encode($row["image"]).'"></a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="info">';
                                 

                                    



                                    echo "<h3>$row[product_name]</h3>";
                                   
                                   
                                   echo'
                                    <div class="rating"><img src="assets/img/star.svg"><img src="assets/img/star.svg"><img src="assets/img/star.svg"><img src="assets/img/star-half-empty.svg"><img src="assets/img/star-empty.svg"></div>
                                    <div class="price">
                                        <h3>$'.$row["price"].'</h3></div>';

                                        
                                            if(isset($_SESSION["customer_ID"])){



                                   echo' <button class="btn btn-primary" onclick="window.location=\'addToCart.php?id='.$row["product_ID"].'\'" type="button"><i class="icon-basket"></i></button>';
                                             } 
                                             
                                             
                                             echo'<div class="summary">
                                        <p>'.$row["description"].'</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="product-info">
                        <div>
                            <ul class="nav nav-tabs" id="myTab">
                                <li class="nav-item"><a class="nav-link active" role="tab" data-toggle="tab" id="specifications-tabs" href="#specifications">Specifications</a></li>
                                <li class="nav-item"><a class="nav-link" role="tab" data-toggle="tab" id="reviews-tab" href="#reviews">Reviews</a></li>
                            </ul>
                            <div class="tab-content" id="myTabContent">
                              
                                <div class="tab-pane active fade show specifications" role="tabpanel" id="specifications">
                                    <div class="table-responsive table-bordered">
                                        <table class="table table-bordered">
                                            <tbody>
                                                <tr>
                                                    <td class="stat">Display</td>
                                                    <td>'.$row["display"].'"</td>
                                                </tr>
                                                <tr>
                                                    <td class="stat">Camera</td>
                                                    <td>'.$row["camera"].'MP</td>
                                                </tr>
                                                <tr>
                                                    <td class="stat">RAM</td>
                                                    <td>'.$row["ram"].'GB</td>
                                                </tr>
                                                <tr>
                                                    <td class="stat">Storage</td>
                                                    <td>'.$row["size"].'GB</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                    ';}
                                ?>

<!-- /////////////////////////ENDS///////////////////////////////////////-->

                                <div class="tab-pane fade show" role="tabpanel" id="reviews">
                                        
                                        
                                        <!-- <form action="" method="post" >
                                            <input class="form-control md-form mb-3" type="text" id="title" name="title" placeholder="Enter Title">
                                            <textarea class="form-control  md-textarea" type="text" id="review" name="review" placeholder="Type your review"></textarea>
                                            <input type="submit"class="btn btn-primary" style="float:right;">


                                        </form> -->

                                            <button class="btn btn-primary" data-toggle="modal"data-target="#modalReviewForm" style="margin-top:2%">Send Review</button>
                                            <div class="reviews">
                                    <?php
                                        include "connect.php";
                                        $val = $_GET["id"];
                                        $sql = "SELECT * FROM review where product_ID =$val";
                                        $result = mysqli_query($conn,$sql);
                                        if(mysqli_num_rows($result) >0){
                                            while($row = mysqli_fetch_array($result)){
                                                $sql2 = "SELECT customer_name from customer where customer_ID = $row[Customer_ID]";
                                                $result2 = mysqli_query($conn,$sql2);
                                                if(mysqli_num_rows($result2) >0){
                                                    while($row2 = mysqli_fetch_array($result2)){
                                                echo '
                                                <div class="review-item">
                                                    <h4>'.$row["reviewTitle"].'</h4><span class="text-muted"><span style="color:blue;">'.$row2["customer_name"].'</span>, '.$row["date"].'</span>
                                                    <p>'.$row["reviewBody"].'</p>
                                                </div>
                                            ';
                                            }
                                        }
                                    }
                                }

                                  
                                   
                                   ?>

</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
    <footer class="page-footer dark">
        <div class="container">
            <div class="row">
                <div class="col-sm-3">
                    <h5>Get started</h5>
                    <ul>
                        <li><a href="#">Home</a></li>
                        <li><a href="#">Sign up</a></li>
                        <li><a href="#">Downloads</a></li>
                    </ul>
                </div>
                <div class="col-sm-3">
                    <h5>About us</h5>
                    <ul>
                        <li><a href="#">Company Information</a></li>
                        <li><a href="#">Contact us</a></li>
                        <li><a href="#">Reviews</a></li>
                    </ul>
                </div>
                <div class="col-sm-3">
                    <h5>Support</h5>
                    <ul>
                        <li><a href="#">FAQ</a></li>
                        <li><a href="#">Help desk</a></li>
                        <li><a href="#">Forums</a></li>
                    </ul>
                </div>
                <div class="col-sm-3">
                    <h5>Legal</h5>
                    <ul>
                        <li><a href="#">Terms of Service</a></li>
                        <li><a href="#">Terms of Use</a></li>
                        <li><a href="#">Privacy Policy</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="footer-copyright">
            <p>© 2018 Copyright Text</p>
        </div>
    </footer>

    <div class="modal fade" id="modalReviewForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  
  
  

  <div class="modal-dialog" role="document">

<?php
  $val = $_GET["id"];
  $CID = $_SESSION["customer_ID"];
  echo '<form action="review.php?pid='.$val.'" method="post" >';
  
  ?>
    <div class="modal-content">
      <div class="modal-header text-center">
        <h4 class="modal-title w-100 font-weight-bold">Review</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      
      <div class="modal-body mx-3">
      <!-- NAME -->
        <div class="md-form mb-3">
            <label data-error="wrong" data-success="right" for="Pname" >Review Title</label>
            <input type="text" id="title" name="title" class="form-control validate" required>
        </div>


        
          <!-- dESC -->
        <div class="md-form">
            <label data-error="wrong" data-success="right" for="form8">Type your Review</label>
          <textarea type="text" id="review" name="review" class="md-textarea form-control" rows="4" required></textarea>
        
        </div>

      </div>
        <!-- SUBMIT -->
      <div class="modal-footer d-flex justify-content-center">
           <button type="button"class="btn btn-primary" style="background-color:red;" data-toggle="modal" data-target="#modalReviewForm">Cancel</button>
         <button type="submit" class="btn btn-primary">Send </button>
         
      </div>
    </div>
  </div>
  </form>
</div>






    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.10.0/baguetteBox.min.js"></script>
    <script src="assets/js/smoothproducts.min.js"></script>
    <script src="assets/js/theme.js"></script>
</body>

</html>