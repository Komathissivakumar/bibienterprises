<?php
include "nav.php";
$con=mysqli_connect("localhost","root","","project");
$id=$_GET["id"];
  $poduc_name="";
 
  $product_offer="";
  // $product_offer=$_POST["product_offer"];
  // $image=$_FILES["product_image"]["name"];
  // $tempname=$_FILES["product_image"]["tmp_name"];
  // $folder="upload/".$image;
	$res=mysqli_query($con,"select * from product where id=$id");
 
 
  
  while ($row=mysqli_fetch_array($res)) 
{
  $product_name=$row["product_name"];
  $product_offer=$row["product_offer"];
  
 
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
         <center><h1>Offer Management</h1></center>
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
		   
               <label for="inputEmail3" type="checkbox" class="col-sm-2 col-form-label" >product_name</label>
               <div class="col-sm-6">
			   
                 <select class="form-control"  name="poduc_name"  >
				 
                   <?php
                  $res=mysqli_query($con,"select product_name from product");
                  while ($row=mysqli_fetch_array($res)) 
				  
                  {
                    echo "<option>";
                    echo $row["product_name"];
                    echo "</option>";
                  }
                  ?>
				  
                 </select>
				 
               
			   </div>
			   
           
          
           <div class="form-group row">
               <label for="inputEmail3" class="col-sm-2 col-form-label">Percentage(%)</label>
               <div class="col-sm-10">
                 <input type="text" name="product_offer" class="form-control" id="inputEmail3" value="<?php echo $product_offer; ?>">
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
                  
				    <a href="offer-view.php" class="btn btn-sm btn-primary pull-left"><button>BACK</button></a>
				  
                </div>
 </body>
</html>
