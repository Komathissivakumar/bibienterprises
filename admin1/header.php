<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>BIBI ENTERPRISES</title>
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="css/global.css" rel="stylesheet">
	<link href="css/index.css" rel="stylesheet">
	<link href="css/lightbox.css" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="css/font-awesome.min.css" />
	<link href="https://fonts.googleapis.com/css?family=Acme&display=swap" rel="stylesheet">
	<script src="js/jquery-2.1.1.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
  </head>
  
<body>
<section id="top">
 <!DOCTYPE html>
<html>
<head>
<style>
ul {
  list-style-type: none;
  margin: 0;
  padding: 10;
  overflow: hidden;
  background-color: #2b6777;
}
#clr li{
	padding-left:50px;
  padding-right:50px;
	
}

li {
  float: left;
}

li a {
  display: block;
  color: white;
  text-align: center;
  padding: 16px;
  text-decoration: none;
}

li a:hover {
  background-color: #c8d8e4;
}
</style>
</head>
<body>



<ul id="clr">
<li><a href="#home">BIBI ENTERPRISES</a></li>
  <li><a href="pro.php">Home</a></li>
  <li><a href="allproduct.php">Product</a></li>
  <li><a href="#about">About</a></li>
  <li><a href="#contact">Contact</a></li>
  <li><a href="sign.php">Admin login</a></li>
</ul>

</body>
</html>

</section>


<div id="toTop" class="btn btn-info" style="display: block; background:#ffc400; color:#000; border:none;"><span class="fa fa-chevron-up"></span></div>

<script type="text/javascript" src="js/smoothbox.js"></script>

<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.js"></script>

<script type="text/javascript">
$(document).ready(function(){
  $('body').append('<div id="toTop" class="btn btn-info"><span class="glyphicon glyphicon-chevron-up"></span> Back to Top</div>');
	$(window).scroll(function () {
		if ($(this).scrollTop() != 0) {
			$('#toTop').fadeIn();
		} else {
			$('#toTop').fadeOut();
		}
	}); 
$('#toTop').click(function(){
	$("html, body").animate({ scrollTop: 0 }, 600);
	return false;
});
});

</script>

</body>
</html>
