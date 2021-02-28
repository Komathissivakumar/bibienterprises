<?php
include "nav.php";
$con=mysqli_connect("localhost","root","","project");
$product_id = $_GET["product_id"];
mysqli_query($con,"delete from product where product_id =$product_id") or die(mysqli_error($con));

?>

<script type="text/javascript">
	window.location="demo.php";
</script>