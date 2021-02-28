<?php

//fetch_data.php

$con=mysqli_connect("localhost","root","","project");
if(isset($_POST["action"]))
{
	$reg = "
		SELECT * FROM product WHERE 
	";
	if(isset($_POST["brand"]))
	{
		$brand_filter = implode("','", $_POST["brand"]);
		$reg .= "
		 AND product_name IN('".$brand_filter."')
		";
	}
	$statement = $con->prepare($reg);
	$statement->execute();
	$result = $statement->fetchAll();
	$total_row = $statement->rowCount();
	$output = '';
	if($total_row > 0)
	{
		foreach($result as $row)
		{
			$output .= '
			<div class="col-sm-4 col-lg-3 col-md-3">
				<div style="border:1px solid #ccc; border-radius:5px; padding:16px; margin-bottom:16px; height:450px;">
					<img src="upload/'. $row['image'] .'" alt="" class="img-responsive" >
					<p align="center"><strong><a href="#">'. $row['product_name'] .'</a></strong></p>
					<h4 style="text-align:center;" class="text-danger" >'. $row['product_price'] .'</h4>
					<p>Camera : '. $row['product_camera'].' MP<br />
					Brand : '. $row['brand_name'] .' <br />
					RAM : '. $row['product_ram'] .' GB<br />
					Storage : '. $row['product_storage'] .' GB </p>
				</div>

			</div>
			';
		}
	}
		else
	{
		$output = '<h3>No Data Found</h3>';
	}
	echo $output;
}

?>