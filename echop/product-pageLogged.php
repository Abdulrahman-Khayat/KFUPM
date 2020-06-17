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
        <div class="container"><a class="navbar-brand logo" href="#">Brand</a><button data-toggle="collapse" class="navbar-toggler" data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse"
                id="navcol-1">
                <form class="form-inline search-form" style="margin-bottom: 0;margin-top: 0;margin-right: 0;margin-left: 20%;">
                    <div class="input-group">
                        <div class="input-group-prepend"></div><input class="border rounded form-control" type="text" placeholder="I am looking for..">
                        <div class="input-group-append"><button class="btn btn-light border rounded" type="button"><i class="fa fa-search"></i></button></div>
                    </div>
                </form>
                <ul class="nav navbar-nav ml-auto">
                    <li class="nav-item" role="presentation"><a class="nav-link" href="index.html">Home</a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link" href="contact-us.html">Contact Us</a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link" href="login.html">Login</a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link" href="registration.html">Register</a></li>
                    <li class="nav-item" role="presentation" href="shopping-cart.html"><a class="nav-link" href="shopping-cart.html"><i class="fas fa-shopping-cart"></i></a></li>
                </ul>
            </div>
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



                                   echo' <button class="btn btn-primary" type="button"><i class="icon-basket"></i></button>';
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
                                    <div class="reviews">
                                        <div class="review-item">
                                            <div class="rating"><img src="assets/img/star.svg"><img src="assets/img/star.svg"><img src="assets/img/star.svg"><img src="assets/img/star.svg"><img src="assets/img/star-empty.svg"></div>
                                            <h4>Incredible product</h4><span class="text-muted"><a href="#">John Smith</a>, 20 Jan 2018</span>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec augue nunc, pretium at augue at, convallis pellentesque ipsum. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                        </div>
                                    </div>
                                    <div class="reviews">
                                        <div class="review-item">
                                            <div class="rating"><img src="assets/img/star.svg"><img src="assets/img/star.svg"><img src="assets/img/star.svg"><img src="assets/img/star.svg"><img src="assets/img/star-empty.svg"></div>
                                            <h4>Incredible product</h4><span class="text-muted"><a href="#">John Smith</a>, 20 Jan 2018</span>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec augue nunc, pretium at augue at, convallis pellentesque ipsum. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                        </div>
                                    </div>
                                    <div class="reviews">
                                        <div class="review-item">
                                            <div class="rating"><img src="assets/img/star.svg"><img src="assets/img/star.svg"><img src="assets/img/star.svg"><img src="assets/img/star.svg"><img src="assets/img/star-empty.svg"></div>
                                            <h4>Incredible product</h4><span class="text-muted"><a href="#">John Smith</a>, 20 Jan 2018</span>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec augue nunc, pretium at augue at, convallis pellentesque ipsum. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
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
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.10.0/baguetteBox.min.js"></script>
    <script src="assets/js/smoothproducts.min.js"></script>
    <script src="assets/js/theme.js"></script>
</body>

</html>