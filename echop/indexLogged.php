
<?php session_start();?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Catalog - Brand</title>
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
    <script src="assets/js/jquery.min.js"></script>

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
                    <li class="nav-item" role="presentation"><a class="nav-link" href="<?php $val = $_GET["id"]; echo "indexLogged.php?id=$val";?>">Home</a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link" href="contact-us.html">Contact Us</a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link" href="<?php $val = $_GET["id"]; echo "orders.php?id=$val";?>">Orders</a></li>
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
                            <li class="nav-item" role="presentation"><a class="nav-link" href="<?php $val = $_GET["id"]; echo "indexLogged.php?id=$val";?>">Home</a></li>
                            <li class="nav-item" role="presentation"><a class="nav-link" href="contact-us.html">Contact Us</a></li>
                            <li class="nav-item" role="presentation"><a class="nav-link" href="<?php $val = $_GET["id"]; echo "orders.php?id=$val";?>">Orders</a></li>

                            <li class="nav-item dropdown no-arrow" role="presentation" style="padding-right: 4px;">
                                <div class="nav-item dropdown no-arrow"><a class="dropdown-toggle nav-link" data-toggle="dropdown" aria-expanded="false" href="<?php $val = $_GET["id"]; echo "cart.php?id=$val";?>"><span class="d-none d-lg-inline mr-2 text-gray-600 small" style="font-size: 12px;color: rgb(0,0,0);">
                                
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
    <main class="page catalog-page">
        <section class="clean-block clean-catalog dark">
            <div class="container">
                <div class="block-heading" style="padding-top: 0;">
                    <div class="carousel slide" data-ride="carousel" id="carousel-1">
                        <div class="carousel-inner" role="listbox">
                            <div class="carousel-item active"><img class="w-100 d-block slides" src="assets/img/accessories.jpg" alt="Slide Image"></div>
                            <div class="carousel-item"><img class="w-100 d-block slides" src="assets/img/2.jpg" alt="Slide Image"></div>
                            <div class="carousel-item"><img class="w-100 d-block slides" src="assets/img/3.jpg" alt="Slide Image"></div>
                        </div>
                        <div><a class="carousel-control-prev" href="#carousel-1" role="button" data-slide="prev"><span class="carousel-control-prev-icon"></span><span class="sr-only">Previous</span></a><a class="carousel-control-next" href="#carousel-1" role="button"
                                data-slide="next"><span class="carousel-control-next-icon"></span><span class="sr-only">Next</span></a></div>
                        <ol class="carousel-indicators">
                            <li data-target="#carousel-1" data-slide-to="0" class="active"></li>
                            <li data-target="#carousel-1" data-slide-to="1"></li>
                            <li data-target="#carousel-1" data-slide-to="2"></li>
                        </ol>
                    </div>
                </div>
                <div class="content">
                    <div class="row">
                        <div class="col-md-3">
                            <div class="d-none d-md-block">
                                <div class="filters">
                                   <!-- BRAND-->
                                    <div class="filter-item">
                                        <h3>Brands</h3>
                                        <?php
                                           include "connect.php";
                                            $sql = "SELECT * FROM brands";
                                            $result = mysqli_query($conn,$sql);
                                            if(mysqli_num_rows($result) >0){
                                            while($row = mysqli_fetch_array($result)){
                                            echo'<div class="form-check"><input class="form-check-input brand" type="checkbox"  value="'.$row["brand_name"].'"  id="'.$row["brand_ID"].' name="'.$row["brand_ID"].'"><label class="form-check-label">'.$row["brand_name"].'</label></div>
                                           ';
                                            }
                                        }
                                        ?>
                                  </div>
                                  <!-- COLOR -->
                                  <div class="filter-item">
                                        <h3>Color</h3>
                                        <div class="form-check"><input class="form-check-input color" type="checkbox"  value="Black"  id="Black" name="Black">
                                        <label class="form-check-label">Black</label></div>
                                        <div class="form-check"><input class="form-check-input color" type="checkbox"  value="White"  id="White" name="White">
                                        <label class="form-check-label">White</label></div>
                                        <div class="form-check"><input class="form-check-input color" type="checkbox"  value="Red"  id="Red" name="Red">
                                        <label class="form-check-label">Red</label></div>
                                        <div class="form-check"><input class="form-check-input color" type="checkbox"  value="Blue"  id="Blue" name="Blue">
                                        <label class="form-check-label">Blue</label></div>
                                        <div class="form-check"><input class="form-check-input color" type="checkbox"  value="Yellow"  id="Yellow" name="Yellow">
                                        <label class="form-check-label">Yellow</label></div>
                                        <div class="form-check"><input class="form-check-input color" type="checkbox"  value="Green"  id="Green" name="Green">
                                        <label class="form-check-label">Green</label></div>

                                       
                                

                                            </div>

                                </div>
                            </div>
                            <div class="d-md-none"><a class="btn btn-link d-md-none filter-collapse" data-toggle="collapse" aria-expanded="false" aria-controls="filters" href="#filters" role="button">Filters<i class="icon-arrow-down filter-caret"></i></a>
                                <div class="collapse"
                                    id="filters">
                                    <div class="filters">
                                        <!-- BRAND -->
                                        <div class="filter-item">
                                            <h3>Brands</h3>
                                            <?php
                                           include "connect.php";
                                            $sql = "SELECT * FROM brands";
                                            $result = mysqli_query($conn,$sql);
                                            if(mysqli_num_rows($result) >0){
                                            while($row = mysqli_fetch_array($result)){
                                            echo'<div class="form-check"><input class="form-check-input brand" type="checkbox"  value="'.$row["brand_name"].'"  id="'.$row["brand_ID"].' name="'.$row["brand_ID"].'"><label class="form-check-label">'.$row["brand_name"].'</label></div>
                                           ';
                                            }
                                        }
                                        ?>
                                            </div>

                                        <!-- COLOR -->
                                        <div class="filter-item">
                                        <h3>Color</h3>
                                        <div class="form-check"><input class="form-check-input color" type="checkbox"  value="Black"  id="Black" name="Black">
                                        <label class="form-check-label">Black</label></div>
                                        <div class="form-check"><input class="form-check-input color" type="checkbox"  value="White"  id="White" name="White">
                                        <label class="form-check-label">White</label></div>
                                        <div class="form-check"><input class="form-check-input color" type="checkbox"  value="Red"  id="Red" name="Red">
                                        <label class="form-check-label">Red</label></div>
                                        <div class="form-check"><input class="form-check-input color" type="checkbox"  value="Blue"  id="Blue" name="Blue">
                                        <label class="form-check-label">Blue</label></div>
                                        <div class="form-check"><input class="form-check-input color" type="checkbox"  value="Yellow"  id="Yellow" name="Yellow">
                                        <label class="form-check-label">Yellow</label></div>
                                        <div class="form-check"><input class="form-check-input color" type="checkbox"  value="Green"  id="Green" name="Green">
                                        <label class="form-check-label">Green</label></div>

                                       
                                  </div>


                                            
                                       
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-9">
                            <div class="products">
                                <div class="row no-gutters">
                            <!-- PRODUCTS-->
<!-- 
                                                                        <?php
                                    include "connect.php";

                                    $sql = "SELECT product_ID, product_name, price, description, image, color, size FROM products WHERE status = 1";
                                    $result = mysqli_query($conn,$sql);
                                    if(mysqli_num_rows($result) > 0){
                                        while($row = mysqli_fetch_array($result)){                                    
                                        
                                   echo '<div class="col-12 col-md-6 col-lg-4">';
                                   echo '<div class="clean-product-item">';
                                   echo '    <div class="image"><a href="product-page.php?id='.$row["product_ID"].'"><img class="img-fluid d-block mx-auto" src="data:image/jpeg;base64,'.base64_encode($row["image"]).'" ></a></div>';
                                   echo'     <div class="product-name"><a href="product-page.php?id='.$row["product_ID"].'">'.$row["product_name"].' - '.$row["color"].' - '.$row["size"].'GB&nbsp;</a></div>';
                                   echo'     <div class="about">';
                                   echo'             <div class="rating"><img  src="assets/img/star.svg"><img src="assets/img/star.svg"><img src="assets/img/star.svg"><img src="assets/img/star-half-empty.svg"><img src="assets/img/star-empty.svg"></div>';
                                    echo'            <div class="price">';
                                     echo'               <h3>$'.$row["price"].'</h3>';
                                     
                                     echo'           </div>';
                                     echo'</div><button class="btn btn-primary btn1" type="button" onclick="window.location=\'addToCart.php?id='.$row["product_ID"].'\'">Add to cart</button></div>';
                                    
                                    echo'</div>';
                                    
                                    }
                                }oncl
                                    ?> -->
                                        
                                    <!-- PRODUCTS-->

                    
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
    <style>
#loading
{
	text-align:center; 
	height: 150px;
}
</style>

<script>
$(document).ready(function(){    
    filter_data();

    function filter_data()
    {
        //store data in variable
        $('.no-gutters').html('<div id="loading" style="" ></div>');
        var action = 'fetch_data';
      
        var brand = get_filter('brand');
        var color = get_filter('color');
   
        $.ajax({
            url:"fetch_dataLogged.php",
            method:"POST",
            data:{action:action,  brand:brand, color:color},
            success:function(data){
                $('.no-gutters').html(data);
            }
        });
    }

    function get_filter(class_name)
    {
        var filter = [];
        $('.'+class_name+':checked').each(function(){
            filter.push($(this).val());
            console.log($(this).val());
        });
        return filter;
    }

    $('.form-check-input').click(function(){
        filter_data();
    });
    
$(".search").keyup(function(){
    
    var txt = $(this).val();
    
        $.ajax({
            url:"searchLogged.php",
            method:"POST",
            data:{search:txt},
            success:function(data){
                $('.no-gutters').html(data);
            }
        });


    

});
  

});
        </script>







    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.10.0/baguetteBox.min.js"></script>
    <script src="assets/js/smoothproducts.min.js"></script>
    <script src="assets/js/theme.js"></script>
</body>

</html>