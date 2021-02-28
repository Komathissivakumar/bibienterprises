<?php
include "nav.php";
$con=mysqli_connect("localhost","root","","project");
if (isset($_POST['submit'])) {
  $product_name=$_POST["product_name"];
  $brand_name=$_POST["brand_name"];
  $product_size=$_POST["product_size"];
  $product_desc=$_POST["product_desc"];
  
  $product_price=$_POST["product_price"];
  $product_offer=$_POST["product_offer"];
  $sdate=$_POST["sdate"];
  $edate=$_POST["edate"];
  
  $image=$_FILES["product_image"]["name"];
  $tempname=$_FILES["product_image"]["tmp_name"];
  $folder="upload/".$image;

  $reg="INSERT INTO product(product_name,brand_name,product_size,product_desc,image,product_price,product_offer,sdate,edate)VALUES('$product_name','$brand_name','$product_size','$product_desc','$image','$product_price','$product_offer','$sdate','$edate')";
  // echo $reg;
  $query_run=mysqli_query($con,$reg) or die(mysqli_error($con));
  $file=move_uploaded_file($tempname, $folder);
  if($query_run)
  {
  echo '<script>alert("Your Product Sucessfully Added")</script>';
    }
    else
    {
      echo '<script>alert("Your Product Not Added")</script>';

    }
  }  
?>

<!DOCTYPE html>
<html>
<head>
	<title>coursemanagent</title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
<link rel="stylesheet" href="../css/admission.css">
<link rel="stylesheet" href="../css/fees.css">
<link rel="stylesheet" href="../css/student.css">
<link rel="stylesheet" href="../css/announcement.css">
</head>
<body>

<div class="container">
     
     <div class="container-head">
         <div class="title">
         <center><h1>Product Management</h1></center>
         </div>
     </div>
     <br>
     <!-- <?php if($flag) { ?> -->
  <div class="alert alert-success"> 
  Product Inserted Successfully  
  </div>
<!-- <?php }?> -->
     <div class="container-body">
        <form action="" method="POST" enctype="multipart/form-data">
          
           <div class="form-group row">
               <label for="inputEmail3" class="col-sm-2 col-form-label">Product Name</label>
               <div class="col-sm-6">
                 <input type="text" name="product_name" class="form-control" id="inputEmail3" required>
               </div>
           </div>
		   
           <div class="form-group row">
               <label for="inputEmail3" class="col-sm-2 col-form-label">Brand Name</label>
               <div class="col-sm-6">
                 <input type="text" name="brand_name" class="form-control" id="inputEmail3" required>
               </div>
           </div>
		   
		    <div class="form-group row">
               <label for="inputEmail3" class="col-sm-2 col-form-label">Product Size</label>
               <div class="col-sm-6">
                 <input type="text" name="product_size" class="form-control" id="inputEmail3" required>
               </div>
           </div>
           <div class="form-group row">
               <label for="inputEmail3" class="col-sm-2 col-form-label">Product Desc</label>
               <div class="col-sm-6">
                 <input type="text" name="product_desc" class="form-control" id="inputEmail3" required>
               </div>
           </div>
          
           <div class="form-group row">
               <label for="inputEmail3" class="col-sm-2 col-form-label">Product Image</label>
               <div class="col-sm-6">
                 <input type="file" name="product_image" class="form-control" id="inputEmail3" required>
               </div>
           </div>
           <div class="form-group row">
               <label for="inputEmail3" class="col-sm-2 col-form-label">Product Price</label>
               <div class="col-sm-6">
                 <input type="text" name="product_price" class="form-control" id="inputEmail3" required>
               </div>
           </div>
		   <div class="form-group row">
               <label for="inputEmail3" class="col-sm-2 col-form-label">Product Offer</label>
               <div class="col-sm-6">
                 <input type="text" name="product_offer" class="form-control" id="inputEmail3" >
               </div>
           </div>
		   <div class="form-group row">
               <label for="inputEmail3" class="col-sm-2 col-form-label">Start Date</label>
               <div class="col-sm-6">
                 <input type="datetime-local" name="sdate" class="form-control" id="inputEmail3" >
               </div>
           </div>
		   <div class="form-group row">
               <label for="inputEmail3" class="col-sm-2 col-form-label">End Date</label>
               <div class="col-sm-6">
                 <input type="datetime-local" name="edate" class="form-control" id="inputEmail3" >
               </div>
           </div>
           
         <div class="form-group row">
               <label for="inputEmail3" class="col-sm-2 col-form-label">Expirary Days</label>
               <div class="col-sm-6">
                 <input type="text" name="edate" class="form-control" id="inputEmail3" >
               </div>
           </div>
		   
		   <div class="form-group row">
               <center class="col-sm-12"> 
                 <input  type="submit" name="submit" class="btn btn-primary">
               </center>	
           </div>
           <br>
        </form>
     </div>
     <div class="container-footer">
     </div>
   </div>
    <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-left top_search">
                  
				    <a href="demo.php" class="btn btn-sm btn-primary pull-left"><button>BACK</button></a>
				  
                </div>
 </body>
</html>
