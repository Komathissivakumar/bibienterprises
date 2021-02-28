<html>
<head>
 
</head>
<body>
<?php 

$con=mysqli_connect("localhost","root","","project");
$query = "SELECT * FROM offer LIMIT 1 ";
$query_run= mysqli_query($con, $query);

		
if(mysqli_num_rows($query_run) > 0)
{
	while($row=mysqli_fetch_assoc($query_run))
	{
		?>
		<center>
		  <div class="col-sm-3" style="width:70%" >
                            <div class="col-item" >
							
                                <div class="photo">
                                   <img src="upload/<?php echo $row['off_image'];?>">
                                </div>
                                
                                </div>
                            </div>
                        
						</center>

		<?php
	}
}
	else
	{
    echo "No Products Found";
    }
?>

  
	

</body>
</html>