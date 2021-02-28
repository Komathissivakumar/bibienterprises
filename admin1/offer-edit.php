<?php
include "nav.php";
$con=mysqli_connect("localhost","root","","project");
$id = $_GET["id"];
$poduc_name="";
$off_sdate="";
$off_edate="";
$off_per="";

$res = mysqli_query($con,"select * from offer where id=$id");
while ($row=mysqli_fetch_array($res))
 {
    
    $poduc_name=$row["poduc_name"];
	$off_sdate=$row["off_sdate"];
	$off_edate=$row["off_edate"];
	$off_per=$row["off_per"];

  }  
?>

<!--main-container-part-->
<div class="container">
     
     <div class="container-head">
         <div class="title">
         <center><h1>Course Management</h1></center>
         </div>
     </div>
     <br>
     <!-- <?php if($flag) { ?> -->
  <div class="alert alert-success"> 
  Course Material Inserted Successfully  
  </div>
<!-- <?php }?> -->
<!-- <div class="container-body">
       <form action="" method="POST" enctype="multipart/form-data">
          
           <div class="form-group row">
               <label for="inputEmail3" class="col-sm-2 col-form-label">poduc_name</label>
               <div class="col-sm-6">
                 <select class="form-control" name="poduc_name">
                   <--?php
                  $res=mysqli_query($con,"select product_name from offer");
                  while ($row=mysqli_fetch_array($res)) 
                  {
                    echo "<option>";
                    echo $row["poduc_name"];
                    echo "</option>";
                  }
                  ?>
                 </select>
               </div>
           </div>-->
           <div class="form-group row">
               <label for="inputEmail3" class="col-sm-2 col-form-label">Product Name</label>
               <div class="col-sm-6">
                 <input type="text" name="poduc_name" value="<?php echo $poduc_name	; ?>" class="form-control" id="inputEmail3" required>
               </div>
           </div>
           <div class="form-group row">
               <label for="inputEmail3" class="col-sm-2 col-form-label">Offer Start Date</label>
               <div class="col-sm-10">
                 <input type="date" name="off_sdate" value="<?php echo $off_sdate; ?>" class="form-control" id="inputEmail3" required>
               </div>
           </div>
          
           <div class="form-group row">
               <label for="inputEmail3" class="col-sm-2 col-form-label">Offer End Date</label>
               <div class="col-sm-10">
                 <input type="text" name="off_edate" value="<?php echo $off_edate; ?>" class="form-control" id="inputEmail3" required>
               </div>
           </div>
		    <div class="form-group row">
               <label for="inputEmail3" class="col-sm-2 col-form-label">Offer Percenrage</label>
               <div class="col-sm-10">
                 <input type="text" name="off_per" value="<?php echo $off_per; ?>" class="form-control" id="inputEmail3" required>
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
    <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-left top_search">
                  
				    <a href="offer-view.php" class="btn btn-sm btn-primary pull-left"><button>BACK</button></a>
				  
                </div>
<!--end-main-container-part-->

<!--Footer-part-->

<?php

if(isset($_POST["submit1"]))
{
     mysqli_query($con,"update offer set poduc_name	='$_POST[poduc_name]', off_sdate='$_POST[off_sdate]', off_edate='$_POST[off_edate]', off_per='$_POST[off_per]', where id=$id") or die(mysqli_error($con));

    ?>
    <script type="text/javascript"> 
        
        document.getElementById("success").style.display="block";
        setTimeout(function(){
            window.location.href=offer.php;
        },3000);
    </script>

    <?php
  
}
?>

