<?php 

//index.php

$con=mysqli_connect("localhost","root","","project");
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Product filter in php</title>

    <script src="js/jquery-1.10.2.min.js"></script>
    <script src="js/jquery-ui.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link href = "css/jquery-ui.css" rel = "stylesheet">
    <!-- Custom CSS -->
    <link href="css/stylee.css" rel="stylesheet">
</head>
<body>
    <!-- Page Content -->
    <div class="container">
        <div class="row">
        	<br />
        	<h2 align="center">Advance Ajax Product Filters in PHP</h2>
        	<br />
            <div class="col-md-3">                				
								
                <div class="list-group">
					<h3>Brand</h3>
                    <div style="height: 180px; overflow-y: auto; overflow-x: hidden;">
					<?php

                    $reg = "SELECT DISTINCT(product_name) FROM product WHERE  ORDER BY product_id DESC";
                    $statement = $con->prepare($reg);
                    
                    
                    
                    {
                    ?>
					<div class="list-group-item checkbox">
                        <label><input type="checkbox" class="common_selector brand" value="<?php echo $row['product_name']; ?>"  > <?php echo $row['product_name']; ?></label>
                    </div>
                    <?php
                    }

                    ?>
                    </div>
                </div>
				
				
				   </div>
                    
                </div>
            </div>

            <div class="col-md-9">
            	<br />
                <div class="row filter_data">

                </div>
            </div>
        </div>

    </div>

</body>

</html>