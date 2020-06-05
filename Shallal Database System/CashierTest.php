<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Untitled</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i">
    <link rel="stylesheet" href="assets/fonts/fontawesome-all.min.css">
    <link rel="stylesheet" href="assets/fonts/font-awesome.min.css">
    <link rel="stylesheet" href="assets/fonts/ionicons.min.css">
    <link rel="stylesheet" href="assets/fonts/fontawesome5-overrides.min.css">
    <link rel="stylesheet" href="assets/css/-Login-form-Page-BS4-.css">
    <link rel="stylesheet" href="assets/css/Burger-Menu-1.css">
    <link rel="stylesheet" href="assets/css/Burger-Menu.css">
    <link rel="stylesheet" href="assets/css/Login-Box-En.css">
    <link rel="stylesheet" href="assets/css/Navigation-with-Search.css">
</head>

<body>
    <nav class="navbar navbar-light navbar-expand-md navigation-clean-search">
        <div class="container"><button data-toggle="collapse" class="navbar-toggler" data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span class="navbar-toggler-icon"></span></button><a class="navbar-brand" href="#">Company Name</a>
            <div class="collapse navbar-collapse"
                id="navcol-1">
                <ul class="nav navbar-nav">
                    <li class="nav-item" role="presentation"><a class="nav-link active" href="#">Link 1</a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link" href="#">Link 2</a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link" href="#">Link 3</a></li>
                </ul>
                <form class="form-inline mr-auto" target="_self">
                    <div class="form-group"><label for="search-field"><i class="fa fa-search"></i></label><input class="form-control search-field" type="search" id="search-field" name="search"></div>
                </form><a class="btn btn-light action-button" role="button" href="#">Action </a></div>
        </div>
    </nav>
    <div>
        <div class="container">
            <div class="row" style="width: 1324px;">
                <div class="col-md-8" style="width: 779px;margin: -6px;padding: 2px;">

                  <?php
                    $i = 0;
                    $j = 1;
                    require 'conn.php';
                    $FoodItem = array(array());

                    $sqli = "SELECT name, CFID  FROM foodcategory";
                    $result = mysqli_query($conn, $sqli);
                    while($row =mysqli_fetch_array($result)){
                    $q = $row['CFID'];
                    $q2 = $row['name'];
                    $FoodItem[$i][0] = $row['name'];echo '<div role="tablist"  id="acc'.$row['CFID'].'">
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
                      $FoodItem[$i][$j]= $row5['name'];



echo'<div>

<button  class = "btn btn-primary" id="'.$FoodItem[$i][$j] .'"  name="'.$FoodItem[$i][$j] .'" value="'.$row5['name'] .'"   " style="margin: 12px;  " onclick="clicked(this.id)" >'.$row5['name'] .'</button>
<input  id="in'.$row5['name'].'" type="number"  min="0" max ="99" step="1" style="width:40px"></input>

</div>
' ;
$j++;
}

              echo'</div>
        </div>
        </div>
  </div>';




$j = 1;
$i++;
}
if(isset($_POST['Chesse hot'])){
  echo '<script> console.log("Sdfsdf");';
}

echo '<script>
function clicked(clickedId){

  console.log(clickedId);
}
</script>
'
                  ?>




                </div><div class="col-md-4" style="width: 344px;">


    <nav class="navbar navbar-dark align-items-start sidebar sidebar-dark accordion bg-gradient-primary p-0">
        <div class="container-fluid d-flex flex-column p-0">

            <a class="navbar-brand d-flex justify-content-center align-items-center sidebar-brand m-0" href="#">
                <div class="sidebar-brand-icon rotate-n-15"><i class="fas fa-laugh-wink"></i></div>
                <div class="sidebar-brand-text mx-3"><span>BRAND</span></div>
            </a>
            <hr class="sidebar-divider my-0" />
            <ul class="nav navbar-nav text-light" id="accordionSidebar">
                <li role="presentation" class="nav-item"><a class="nav-link" href="index.html"><i class="fas fa-tachometer-alt"></i><span> Dashboard</span></a></li>
                <hr class="sidebar-divider" />
                <div class="sidebar-heading">
                    <p class="mb-0">INTERFACE</p>
                </div>
                <li role="presentation" class="nav-item">
                    <div><a class="btn btn-link nav-link" data-toggle="collapse" aria-expanded="false" aria-controls="collapse-1" href="#collapse-1" role="button"><i class="fas fa-cog"></i><span>Components</span></a>
                        <div class="collapse" id="collapse-1">
                            <div class="bg-white border rounded py-2 collapse-inner">
                                <h6 class="collapse-header">CUSTOM COMPONENTS:</h6><a class="collapse-item" href="buttons.html">Buttons</a><a class="collapse-item" href="cards.html">Cards</a></div>
                        </div>
                    </div>
                </li>
                <li role="presentation" class="nav-item">
                    <div><a class="btn btn-link nav-link" data-toggle="collapse" aria-expanded="false" aria-controls="collapse-2" href="#collapse-2" role="button"><i class="fas fa-wrench"></i><span>Utilities</span></a>
                        <div class="collapse" id="collapse-2">
                            <div class="bg-white border rounded py-2 collapse-inner">
                                <h6 class="collapse-header">CUSTOM UTILITIES:</h6><a class="collapse-item" href="utilities-color.html">Colors</a><a class="collapse-item" href="utilities-border.html">Borders</a><a class="collapse-item" href="utilities-animation.html">Animations</a>
                                <a
                                    class="collapse-item" href="utilities-other.html">Other</a>
                            </div>
                        </div>
                    </div>
                </li>
                <hr class="sidebar-divider" />
                <div class="sidebar-heading">
                    <p class="mb-0">Addons</p>
                </div>
                <li role="presentation" class="nav-item">
                    <div><a class="btn btn-link nav-link" data-toggle="collapse" aria-expanded="false" aria-controls="collapse-3" href="#collapse-3" role="button"><i class="fas fa-folder"></i><span>Pages</span></a>
                        <div class="collapse" id="collapse-3">
                            <div class="bg-white border rounded py-2 collapse-inner">
                                <h6 class="collapse-header">LOGIN SCREENS:</h6><a class="collapse-item" href="login.html">Login</a><a class="collapse-item" href="register.html">Register</a><a class="collapse-item" href="forgot-password.html">Forgot Password</a>
                                <h6 class="collapse-header">OTHER PAGES:</h6><a class="collapse-item" href="404.html">404 Page</a><a class="collapse-item" href="blank.html">Blank Page</a></div>
                        </div>
                    </div>
                    <div id="collapsePages" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar" aria-controls="collapsePages">
                        <div class="bg-white border rounded py-2 collapse-inner">
                            <h6 class="collapse-header">LOGIN SCREENS:</h6><a class="collapse-item" href="#">Login</a><a class="collapse-item" href="#">Register</a><a class="collapse-item" href="#">Forgot Password</a>
                            <h6 class="collapse-header">OTHER PAGES:</h6><a class="collapse-item" href="#">404 Page</a><a class="collapse-item" href="#">Blank Page</a></div>
                    </div>
                </li>
                <li role="presentation" class="nav-item"><a class="nav-link" href="charts.html"><i class="fas fa-chart-area"></i><span> Charts</span></a></li>
                <li role="presentation" class="nav-item"><a class="nav-link" href="tables.html"><i class="fas fa-table"></i><span> Tables</span></a></li>
                <hr class="sidebar-divider" />
            </ul>
            <div class="text-center d-none d-md-inline"><button class="btn rounded-circle border-0" id="sidebarToggle" type="button"></button></div>
        </div>
    </nav>
</div></div>
        </div>
    </div>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/chart.min.js"></script>
    <script src="assets/js/bs-init.js"></script>
    <script src="assets/js/Burger-Menu.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.js"></script>
    <script src="assets/js/JavaScript.js"></script>
      <script src="assets/js/qwert5.js"></script>
    <script src="assets/js/theme.js"></script>

    <script>
    function f(clickedid){
      var x = document.getElementById(clickedid).value  ;
      var table = document.getElementById('wqwq');

      var row = table.insertRow();

      var cell1 = row.insertCell(0);
      var cell2 = row.insertCell(1);

      cell1.innerHTML = x;



  }



</script>
</body>

</html>
