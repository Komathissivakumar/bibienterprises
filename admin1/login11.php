<?php
session_start();
$link=mysqli_connect("localhost","root","","project");
if(isset($_POST['login']))
{ 
 
  $email=$_POST['email'];
   $upswd1=$_POST['upswd1'];
  
   $query="SELECT * FROM register WHERE email='$email' 
   AND upswd1='$upswd1' ";
   $result=mysqli_query($link,$query);
   while($row=mysqli_fetch_array($result)){
      
       $e=$row['email'];
	   $upswd1=$row['upswd1'];
   }
   if($result)
   {
    $_SESSION['email']=$e;
    $_SESSION['upswd1']=$upswd1;
   
   }
   else
   {
    echo "error in upswd1 or email";
   }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login page</title>
    <link href="tuition_project/css/registration.css" rel="stylesheet">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="../staff/style/style.css">
</head>
<body>
    <div class="wrapper">
        <h2>
Responsive Login Form</h2>
<div class="form-conteniar">
            <form method="post" action="nav.php" >
                
							<div class="input-name">
                        <i class="fa fa-envelope email"></i>
                        <input type="email" placeholder="Email" name="email" required class="text-name">
                </div>
<div class="input-name">
                    <i class="fa fa-lock lock"></i>
                    <input type="password" placeholder="Password" name="upswd1" class="text-name">
                </div>

                
         <div class="alert alert-danger" id="uname1" style="display:none">
          This User Already Exist! Try Another.
          </div>
          <div class="alert alert-danger" id="email" style="display:none">
          This Email Already Exist! Try Another.
          </div>
          <div class="alert alert-danger" id="upswd1" style="display:none">
          Password doesn't match.
          </div>
          <div class="alert alert-success" id="success" style="display:none">
          Logged in Successfully.
          </div>
<input type="submit" name="" value="Login"> </div>
</div>
</body>
</html>
