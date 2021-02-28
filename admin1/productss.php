
<?php
include "nav.php";
$con=mysqli_connect("localhost","root","","project");
if (isset($_POST['submit'])) {
  $proc_name=$_POST["proc_name"];
  $product_desc=$_POST["product_desc"];
  $product_price=$_POST["product_price"];
  $product_size=$_POST["product_size"];
  $brand_name=$_POST["brand_name"];
  $image=$_FILES["image"]["name"];
  $tempname=$_FILES["image"]["tmp_name"];
  $folder="upload/".$image;

  $reg="INSERT INTO free_product(proc_name,product_desc,product_price,product_size,brand_name,image)VALUES('$proc_name','$product_desc','$product_price','$product_size','$brand_name','$image')";
  // echo $reg;
  $query_run=mysqli_query($con,$reg) or die(mysqli_error($con));
  if($query_run)
  {
  echo '<script>alert("ADMISSION SUCCESSFUL")</script>';
    }
    else
    {
      echo '<script>alert("ADMISSION  NOT SUCCESSFUL")</script>';

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
  Course Material Inserted Successfully  
  </div>
<!-- <?php }?> -->
     <div class="container-body">
        <form action="" method="POST" enctype="multipart/form-data">
          
           <div class="form-group row">
               <label for="inputEmail3" class="col-sm-2 col-form-label">product_name</label>
               <div class="col-sm-6">
                 <input type="text" name="proc_name" class="form-control" id="inputEmail3" required>
               </div>
           </div>
           <div class="form-group row">
               <label for="inputEmail3" class="col-sm-2 col-form-label">brand_name</label>
               <div class="col-sm-6">
                 <input type="text" name="brand_name" class="form-control" id="inputEmail3" required>
               </div>
           </div>
           <div class="form-group row">
               <label for="inputEmail3" class="col-sm-2 col-form-label">product_desc</label>
               <div class="col-sm-10">
                 <input type="text" name="product_desc" class="form-control" id="inputEmail3" required>
               </div>
           </div>
           <div class="form-group row">
               <label for="inputEmail3" class="col-sm-2 col-form-label">Product size</label>
               <div class="col-sm-10">
                 <input type="text" name="product_size" class="form-control" id="inputEmail3" required>
               </div>
           </div>
           
           <div class="form-group row">
               <label for="inputEmail3" class="col-sm-2 col-form-label">Product Price</label>
               <div class="col-sm-10">
                 <input type="text" name="product_price" class="form-control" id="inputEmail3" required>
               </div>
           </div>
           <div class="form-group row">
               <label for="inputEmail3" class="col-sm-2 col-form-label">product_image</label>
               <div class="col-sm-10">
                 <input type="file" name="image" class="form-control" id="inputEmail3" required>
               </div>
           </div>
           
          <div class="form-group row">
               <center class="col-sm-12">
                 <input  type="submit" name="submit" class="btn btn-primary">
               </center>	
           </div>
           <br>
        <form>
     </div>
     <div class="container-footer">
     </div>
   </div>
 </body>
</html>
