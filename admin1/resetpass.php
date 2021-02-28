<?php
$con=mysqli_connect("localhost","root","","fregister");
$flag=0;
if (isset($_POST['submit'])) {
	$newpass=$_POST['newpass'];
	$email=$_GET['email'];
	$changepass=mysqli_query($con,"UPDATE registration SET password='".$newpass."' WHERE email='".$email."'");
	 if ($changepass) {
      $flag=1;
      header("Location:index.php");
    }
	else
	{
		echo "error";
	}
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reset Password </title>
   <!--  -->
   <link rel="stylesheet" type="text/css" href="registration.css">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
</head>
<body>
    <div class="wrapper">
        <h2>
       Reset Password</h2>
       <?php if($flag) { ?>
  <div class="alert alert-success"> 
  Password Changed Successfully  
  </div>
<?php }?>
        <div class="form-container">
            <form method="POST" action="">
</div>
<div class="input-name">
    <i class="fa fa-lock lock"></i>
    <input type="password" placeholder="Password" name="newpass" class="text-name">

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
                        <input class="button" type="submit" name='submit' value="change" />
                    </div>
                  

</form>
</div>
</div>
</body>
</html>