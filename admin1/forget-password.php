<?php
$con=mysqli_connect("localhost","root","","fregister");
if (isset($_POST['submit'])) {
	$email=$_POST['email'];
	$query="SELECT password FROM registration WHERE email='".$email."'";
	echo $query;
	$check_email=mysqli_query($con,$query);
	if(mysqli_num_rows($check_email)>0)
	{
		header('location:resetpass.php?email='.$email);
	}
	else
	{
		echo "wrong Email";
	}
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Forget Password </title>
   <!--  -->
   <link rel="stylesheet" type="text/css" href="admin/css/registration.css">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
</head>
<body>
    <div class="wrapper">
        <h2>
       Forget Password</h2>
        <div class="form-conteniar">
            <form method="POST" action="">
<div class="input-name">
                        <i class="fa fa-envelope email"></i>
                        <input type="email" placeholder="Email" name="email" required class="text-name">
                </div>

         
          <div class="alert alert-danger" role="alert" id="email" style="display:none">
          This Email Not Exist! Please Register.
          </div>

           <div class="alert alert-danger" id="username_password" style="display:none">
          Username & Password doesn't match.
          </div> 

          <div class="alert alert-danger" id="role" style="display:none">
          U don't have right to access by this role.
          </div> 
          <div class="alert alert-sucess" role="alert" id="success" style="display:none">
          Logged in Successfully.
          </div>
          <div class="input-name">
                        <input class="button" type="submit" name='submit' value="Forget Password" />
                    </div>
                  

</form>
</div>
</div>
</body>
</html>
