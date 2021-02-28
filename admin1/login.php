<?php
$link=mysqli_connect("localhost","root","","project");
if(isset($_POST['register'])){
$uname1=mysqli_real_escape_string($link,$_POST['uname1']);
$email=mysqli_real_escape_string($link,$_POST['email']);
$upswd1=mysqli_real_escape_string($link,$_POST['upswd1']);
$upswd2=mysqli_real_escape_string($link,$_POST['upswd2']);



  $check_exist_user=mysqli_query($link,"select * from register where uname1='$uname1'") ;
  if($res=mysqli_num_rows($check_exist_user) > 0){
    echo "alredy exist";
    ?>
    
    <script type="text/javascript">
        document.getElementById('uname1').style.display="block";
  </script>
    <?php
  }
  else{
    $check_exist_email=mysqli_query($link,"select * from register where email='$email'");
    if($res=mysqli_num_rows($check_exist_email) > 0){
      ?>
      <script type="text/javascript">
          document.getElementById('email').style.display="block";
    </script>
      <?php
    }
    else{
      $check_valid=mysqli_query($link,"select * from register where email='$email' && upswd1='$upswd1' ");
      if($res=mysqli_num_rows($check_valid) > 0){
        ?>
        <script type="text/javascript">
            document.getElementById('username_password').style.display="block";
      </script>
        <?php
      }
      else{

        if($upswd1!=$upswd2){
          ?>

          <script type="text/javascript">
              document.getElementById('password').style.display="block";
        </script>
          <?php
        }
        else{
            $res=mysqli_query($link,"insert into register(uname1,email,upswd1,upswd2) values('$uname1','$email','$upswd1','$upswd2')") or die(mysqli_error($link));
         
          ?>

          <script type="text/javascript">
              document.getElementById('success').style.display="block";
        </script>
          <?php
          
          header("Location:nav.php");

        }
      }
    }

  }
  
} 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="tuition_project/css/registration.css" rel="stylesheet">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="../staff/style/style.css">
</head>
<body>
    <div class="wrapper">
        <h2>
Responsive Registration Form</h2>
<div class="form-conteniar">
            <form method="post" action="">
                <div class="input-name">
                    <i class="fa fa-user lock"></i>
                    <input type="text" placeholder="User Name" class="name" name="uname1">
                    <!-- <span class="last">
                    <i class="fa fa-user lock"></i>
                    <input type="text" placeholder="Last Name" class="name">
                    </span> -->
                </div>
<div class="input-name">
                        <i class="fa fa-envelope email"></i>
                        <input type="email" placeholder="Email" name="email" required class="text-name">
                </div>
<div class="input-name">
                    <i class="fa fa-lock lock"></i>
                    <input type="password" placeholder="Password" name="upswd1" class="text-name">
                </div>
<div class="input-name">
                    <i class="fa fa-lock lock"></i>
                    <input type="password" placeholder="Re-type Password" name="upswd2" class="text-name">
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
                  <div class="input-name">
                        <input class="button" type="submit" name='register' value="Register" />
                    </div>
                   <p>Already have an account?<a href="login.php">Login here</a></p>
                    </div>
</div>
</body>
</html>
