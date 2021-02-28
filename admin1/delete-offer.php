<?php
include "nav.php";
$con=mysqli_connect("localhost","root","","project");
$id = $_GET["id"];
mysqli_query($con,"delete from offer where id=$id") or die(mysqli_error($con));

?>

<script type="text/javascript">
	window.location="offer-view.php";
</script>