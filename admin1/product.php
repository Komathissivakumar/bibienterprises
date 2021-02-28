<?php 
include "header.php";
$con=mysqli_connect("localhost","root","","project");
$query = "SELECT * FROM product ";
$query_run= mysqli_query($con, $query);


if(mysqli_num_rows($query_run) > 0)
{
	while($row=mysqli_fetch_assoc($query_run))
	{
		?>
		
		
			
			
		  <div class="col-sm-3">
                            <div class="col-item">
                                <div class="photo" >
                                   <img src="upload/<?php echo $row['image'];?>">
                                </div>
                                <div class="info">
								</br>
								</br>
                                    <div class="row_1">
                                        <div class="price col-sm-12" style="height:100px">
                                           <h4>Product Name: <?php echo $row['product_name']; ?> </h4>
<h4>Brand Name: <?php echo $row[
'brand_name']; ?> </h4>
		 <div><!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
  See More Details
</button>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h2 class="modal-title" id="exampleModalLabel">Product Details</h2>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        
		 <div class="price col-sm-12">
                                           <h4>Product Name: <?php echo $row['product_name']; ?> </h4>
<h4>Brand Name: <?php echo $row[
'brand_name']; ?> </h4>
<h4>Product Size: <?php echo $row['product_size']; ?> </h4>

<h4>Product Offer: <?php echo $row['product_offer']; ?> </h4>
<h4>Product price: <?php echo $row['product_price']; ?> </h4>
                                            
                                            <h4 >Product Description: <?php echo $row['product_desc']; ?> </h4>

                                        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <!--<button type="button" class="btn btn-primary">Save changes</button>-->
      </div>
    </div>
  </div>
</div></div>

                                        </div>
                                        
                                    </div>
                                    
                                    
                                </div>
                            </div>
                        </div>
						

		<?php
	}
}
	else
	{
    echo "No Products Found";
    }
?>

            
	 



