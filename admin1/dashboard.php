<?php
include "nav.php";

?>

<!DOCTYPE html>
<html>
<head>
	<title>serach student details</title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
<link rel="stylesheet" href="css/admission.css">
<link rel="stylesheet" href="css/fees.css">
<link rel="stylesheet" href="css/student.css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css
">
</head>
<body>
<center>

<div class="container">
     
     <div class="container-head">
         <div class="title">
         <center><h1>Products</h1></center>
         </div>
     </div>
     <div class="container-body">
        <form action="" method="POST">
          
          <br>
          <!-- table start -->
          
          <table class="table table-bordered">
            <thead class="thead-dark">

              <tr>
                <th scope="col"><center>Product Name</center></th>
                <th scope="col"><center>Brand Name</center>	</th>
                <th scope="col"><center>Product Size</th>
				<th scope="col"><center>Product Desc</center></th>
				<th scope="col"><center>Image</center></th>
				<th scope="col"><center>Product Price</center></th>
				<th scope="col"><center>Product Offer</center></th>
				<th scope="col"><center>Start Date</center></th>
				<th scope="col"><center>End Date</center></th>
				
                
              </tr>
            </thead>
            <tbody>
             <?php
  $con=mysqli_connect("localhost","root","","project");
    
    $query="SELECT * FROM product";
    $query_run=mysqli_query($con,$query);
    while ($row=mysqli_fetch_array($query_run)) {
      ?>
      <form action="" method="POST">
      <tr>
    <td><?php echo $row['product_name'];?></td>
    <td><?php echo $row['brand_name'];?></td>
	<td><?php echo $row['product_size'];?></td>
	<td><?php echo $row['product_desc'];?></td>
	<td>
	<img src="upload/<?php echo $row['image'];?>" style="width:60px;height:50px">
	</td>
	<td><?php echo $row['product_price'];?></td>
	<td><?php echo $row['product_offer'];?></td>
	<td><?php echo $row['sdate'];?></td>
	<td><?php echo $row['edate'];?></td>
	
	
                     

    <!--<td><a href="$MEETINGLINK"><--?php echo $row['MEETINGLINK'];?></a></td>-->
    </tr>       
    </form>
    <?php
    }
  
  ?>
            
            </tbody>
          </table>
          <!-- table end -->
        </form>
     </div>

   </div>

</center>
 <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-left top_search">
                  
				    <a href="nav.php" class="btn btn-sm btn-primary pull-"><button>BACK</button></a>
				  
                </div>
</body>
</html>