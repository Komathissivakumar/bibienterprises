<?php
include "nav.php";
$con=mysqli_connect("localhost","root","","project");
$product_id = $_GET["product_id"];
$product_name="";
$brand_name="";
$product_size="";
$product_desc="";
$image="";
$product_price="";
$product_offer="";
$sdate="";
$edate="";
$res = mysqli_query($con,"select * from product where product_id=$product_id");
while ($row=mysqli_fetch_array($res))
 {
    
    $product_name=$row["product_name"];
	$brand_name=$row["brand_name"];
	$product_size=$row["product_size"];
	$product_desc=$row["product_desc"];
	$image=$row["image"];
	$product_price=$row["product_price"];
	$product_offer=$row["product_offer"];
	$sdate=$row["sdate"];
	$edate=$row["edate"];
    

  } 
 
?>

<!--main-container-part-->
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
          
          <!-- <div class="form-group row">
               <label for="inputEmail3" class="col-sm-2 col-form-label">product_name</label>
               <div class="col-sm-6">
                 <select class="form-control" name="product_name">
                   <-- ?php
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
           </div>-->
           <div class="form-group row">
               <label for="inputEmail3" class="col-sm-2 col-form-label">Product Name</label>
               <div class="col-sm-6">
                 <input type="text" name="product_name" value="<?php echo $product_name	; ?>" class="form-control" id="inputEmail3" required>
               </div>
           </div>
           <div class="form-group row">
               <label for="inputEmail3" class="col-sm-2 col-form-label">Brand Name</label>
               <div class="col-sm-10">
                 <input type="text" name="brand_name" value="<?php echo $brand_name; ?>" class="form-control" id="inputEmail3" required>
               </div>
           </div>
          
           <div class="form-group row">
               <label for="inputEmail3" class="col-sm-2 col-form-label">Product Size</label>
               <div class="col-sm-10">
                 <input type="text" name="product_size" value="<?php echo $product_size; ?>" class="form-control" id="inputEmail3" required>
               </div>
           </div>
		    <div class="form-group row">
               <label for="inputEmail3" class="col-sm-2 col-form-label">Product description)</label>
               <div class="col-sm-10">
                 <input type="text" name="product_desc" value="<?php echo $product_desc; ?>" class="form-control" id="inputEmail3" required>
               </div>
           </div>
		  <div class="form-group row">
               <label for="inputEmail3" class="col-sm-2 col-form-label">Product Image</label>
               <div class="col-sm-10">
                 <input type="file" name="image" value="<?php echo $image; ?>" class="form-control" id="inputEmail3" required>
               </div>
           </div>
		    <div class="form-group row">
               <label for="inputEmail3" class="col-sm-2 col-form-label">Product Price</label>
               <div class="col-sm-10">
                 <input type="number" name="product_price" value="<?php echo $product_price; ?>" class="form-control" id="inputEmail3" required>
               </div>
           </div>
		   <div class="form-group row">
               <label for="inputEmail3" class="col-sm-2 col-form-label">Product Offer</label>
               <div class="col-sm-10">
                 <input type="number" name="product_offer" value="<?php echo $product_offer; ?>" class="form-control" id="inputEmail3" required>
               </div>
           </div>
		   <div class="form-group row">
               <label for="inputEmail3" class="col-sm-2 col-form-label">Start Date</label>
               <div class="col-sm-10">
                 <input type="datetime-local" name="sdate" value="<?php echo $sdate; ?>" class="form-control" id="inputEmail3" >
               </div>
           </div>
		   <div class="form-group row">
               <label for="inputEmail3" class="col-sm-2 col-form-label">End Date</label>
               <div class="col-sm-10">
                 <input type="datetime-local" name="edate" value="<?php echo $edate; ?>" class="form-control" id="inputEmail3" >
               </div>
           </div>
		   
           <div class="form-group row">
               <label for="inputEmail3" class="col-sm-2 col-form-label">Expirary Days</label>
               <div class="col-sm-6">
                 <input type="text" name="edate" class="form-control" id="inputEmail3" >
               </div>
           </div>
          <tr>
			<th colspan=2>				
				<center><input type="submit"  name="submit" class="btn  btn-success" value="Update" >
			    <a href="demo.php"  style="display: inline;" ><!--<input type="button" class="btn btn-danger" value="Cancel"/>--></a>
				</center>				
				
			</th>
		</tr>
           <br>
        <form>
     </div>
     <div class="container-footer">
     </div>
   </div>
    <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-left top_search">
                  
				    <a href="demo.php" class="btn btn-sm btn-primary pull-left"><button>BACK</button></a>
				  
                </div>
<!--end-main-container-part-->

<!--Footer-part-->

<?php
if(isset($_POST["submit"]))

{
    $query= mysqli_query($con,"update product set product_name	='$_POST[product_name]', brand_name='$_POST[brand_name]', product_size='$_POST[product_size]', product_desc='$_POST[product_desc]',image='$_POST[image]',product_price='$_POST[product_price]',product_offer='$_POST[product_offer]',sdate='$_POST[sdate]',edate='$_POST[edate]' where product_id=$product_id") or die(mysqli_error($con));
	 echo $query;

    ?>
    <script type="text/javascript"> 
        
        document.getElementById("success").style.display="block";
        setTimeout(function(){
            window.location.href=dashboard.php;
        },3000);
    </script>

    <?php
  
}
?>

