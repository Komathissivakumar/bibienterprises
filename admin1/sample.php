<?php 

$con=mysqli_connect("localhost","root","","project");
$query = "SELECT * FROM product LIMIT 4 ";
$query_run= mysqli_query($con, $query);

		
if(mysqli_num_rows($query_run) > 0)
{
	while($row=mysqli_fetch_assoc($query_run))
	{
		?>
		
		
			
			
		  <div class="col-sm-3">
		 
                                <div class="info">
								</br>
								</br>
                                    <div class="row_1" >
                                        <div class="price col-sm-12" style="height:100px">
                                           
          
                                            
                                            
                                            <h4 > product size:<?php echo $row['product_size']; ?> </h4>

                                        </div>
										 
        
		 
                                    
                                    <div class="clearfix">
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

            
	 




