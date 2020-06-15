<?php
    include "database_connection.php";
   
    if(isset($_POST["action"]))
{
	$query = "SELECT * FROM products WHERE status = '1'";
	
	if(isset($_POST["brand"]))
	{
		$brand_filter = implode("','", $_POST["brand"]);
		$query .= "
		 AND Brand IN('".$brand_filter."')
		";
	}
	
	if(isset($_POST["search"])){
		$brand_filter = implode("','", $_POST["search"]);
		$query .= "
		 AND product_name Like ('%".$brand_filter."%')
		";


	}

	if(isset($_POST["color"]))
		{
			$brand_filter = implode("','", $_POST["color"]);
			$query .= "
			 AND color LIKE('".$brand_filter."')
			";
		}

	




	$statement = $connect->prepare($query);
	$statement->execute();
	$result = $statement->fetchAll();
	$total_row = $statement->rowCount();
	$output = '';
	if($total_row > 0)
	{
		foreach($result as $row)
		{
			$output .= '
			
                <div class="col-12 col-md-6 col-lg-4">
            <div class="clean-product-item">
            <div class="image"><a href="product-page.php?id='.$row["product_ID"].'"><img class="img-fluid d-block mx-auto" src="data:image/jpeg;base64,'.base64_encode($row["image"]).'" onclick="productPage(this.src)"></a></div>
                <div class="product-name"><a href="product-page.php?id='.$row["product_ID"].'">'.$row["product_name"].' - '.$row["color"].' - '.$row["size"].'GB&nbsp;</a></div>
                 <div class="about">
                   <div class="rating"><img  src="assets/img/star.svg"><img src="assets/img/star.svg"><img src="assets/img/star.svg"><img src="assets/img/star-half-empty.svg"><img src="assets/img/star-empty.svg"></div>
                         <div class="price">
                             <h3>$'.$row["price"].'  </h3>
                         </div>
            
             </div>
			 </div>
             </div>

             </div>
			';
		}
	}}
	else
	{
		$output = '<h3>No Data Found</h3>';
	}
	echo $output;


?>