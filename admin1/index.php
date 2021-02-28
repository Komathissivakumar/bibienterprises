<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
   <!--  -->
   <link rel="stylesheet" type="text/css" href="admin/css/registration.css">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
</head>
<body>
    <div class="wrapper">
        <h2>
       Login Form</h2>
        <div class="form-conteniar">
            <form method="post" action="">
<div class="input-name">
                        <i class="fa fa-envelope email"></i>
                        <input type="email" placeholder="Email" name="email" required>
                </div>
<div class="input-name">
                    <i class="fa fa-lock lock"></i>
                    <input type="password" placeholder="Password" name="password" class="text-name" required>

                </div>

              
          <div class="alert alert-danger" role="alert" id="email" style="display:none">
          This Email Not Exist! Please Register.
          </div>

           <div class="alert alert-danger" id="username_password" style="display:none">
          Username & Password doesn't match.
          </div> 

          
          <div class="alert alert-sucess" role="alert" id="success" style="display:none">
          Logged in Successfully.
          </div>
                  <div class="input-name">
                        <input class="button" type="submit" name='register' value="Login" />
                    </div>
                    <span class="last">
                     <a href="register.php">Don't have account</a> 
                     <i class="fa fa-question lock"></i>
                    <a href="forget-password.php">Forget Password?</a>
                   </span>
                   


</form>
</div>
</div>
</body>
</html>

<?php
 $con=mysqli_connect("localhost","root","","fregister");
if(isset($_POST['register']))
{

    $email=mysqli_real_escape_string($con,$_POST['email']);
    $password=mysqli_real_escape_string($con,$_POST['password']);
    

    $check_exist_email=mysqli_query($con,"select * from registration where email='$email'");
      if($res=mysqli_num_rows($check_exist_email) == 0)
      {
          
          ?>
          
          <script type="text/javascript">
              document.getElementById('email').style.display="email";
          </script>
          <?php
        }
        else
           {
            $check_valid=mysqli_query($con,"select * from registration where email='$email' && password='$password' ");
              if($res=mysqli_num_rows($check_valid) == 0){
                ?>
                <script type="text/javascript">
                    document.getElementById('username_password').style.display="block";
              </script>
                <?php
              }
              else
              
                  {         
                    ?>

                    <script type="text/javascript">
                        document.getElementById('success').style.display="block";
                  </script>
                    <?php
                    
                      $_SESSION['email']=$email;
                      echo $_SESSION['email'] ;
                      if(!isset($_SESSION['email'])){
                      header("Location:nav.php");
                    }
                   
                       
                       
                    }

                   }
               }
           

      
  

?>