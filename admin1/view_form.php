<?php

include "nav.php";

$con=mysqli_connect("localhost","root","","project");

if (isset($_POST['submit'])) {
  $produc_name=$_POST["$produc_name"];
  $produc_brand=$_POST["$produc_brand"];
  $produc_size=$_POST["$produc_size"];
  $produc_des=$_POST["$produc_des"];
  $produc_image=$_POST["$produc_image"];
  $$produc_price=$_POST["$produc_price"];
  $off_sdate=$_POST["off_sdate"];
  $off_edate=$_POST["off_edate"];
  $off_per=$_POST["off_per"];


$reg="INSERT INTO product(produc_name	,produc_brand,produc_size,produc_des,produc_image,produc_price)VALUES('$produc_name','$produc_brand','$produc_size','$produc_des','$produc_image','$produc_price','$off_sdate','$off_edate','$off_per')";
}
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
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
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
                <th scope="col">product_name</th>
                <th scope="col">brand_name	</th>
                <th scope="col">product_size</th>
				<th scope="col">product_desc</th>
				<th scope="col">image</th>
				<th scope="col">product_price</th>
				
				
				
                
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
	
                     <td>
			
					 <td><a href="offer.php?product_id=<?php echo $row['product_id']?>" class=" btn btn-primary">Addoffer</a></td>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <?php 
		include "offer.php";
		?>
      </div>
      
    </div>
  </div>
</div>
  
                     </td>

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
                  
				    <a href="nav.php" class="btn btn-sm btn-primary pull-left"><button>BACK</button></a>
				  
                </div>
</body>
</html>