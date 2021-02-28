<?php
/* Database credentials. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$link=mysqli_connect("localhost","root","","project");
if(isset($_POST['register'])){
$uname1=mysqli_real_escape_string($link,$_POST['uname1']);
$email=mysqli_real_escape_string($link,$_POST['email']);
$upswd1=mysqli_real_escape_string($link,$_POST['upswd1']);
$upswd2=mysqli_real_escape_string($link,$_POST['upswd2']);

// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
?>
<?php
{
	
// Include config file
require_once "config.php";
 
// Define variables and initialize with empty values
$uname1 = $email = $upswd1 = $upswd2 = "";
$uname1_err = $email_err = $upswd1_err = $upswd2_err = "";
 
// Processing form data when form is submitted
if($_SERVER["REQUEST_METHOD"] == "POST"){
 
    // Validate username
    if(empty(trim($_POST["uname1"]))){
        $username_err = "Please enter a uname1.";
    } else{
        // Prepare a select statement
        $sql = "SELECT id FROM users WHERE uname1 = ?";
        
        if($stmt = mysqli_prepare($link, $sql)){
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "s", $param_username);
            
            // Set parameters
            $param_username = trim($_POST["uname1"]);
            
            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt)){
                /* store result */
                mysqli_stmt_store_result($stmt);
                
                if(mysqli_stmt_num_rows($stmt) == 1){
                    $username_err = "This uname1 is already taken.";
                } else{
                    $uname1 = trim($_POST["uname1"]);
                }
            } else{
                echo "Oops! Something went wrong. Please try again later.";
            }

            // Close statement
            mysqli_stmt_close($stmt);
        }
    }
    
    // Validate password
    if(empty(trim($_POST["upswd1"]))){
        $password_err = "Please enter a password.";     
    } elseif(strlen(trim($_POST["upswd1"])) < 6){
        $password_err = "Password must have atleast 6 characters.";
    } else{
        $upswd1 = trim($_POST["upswd1"]);
    }
    
    // Validate confirm password
    if(empty(trim($_POST["upswd2	"]))){
        $upswd2_err = "Please confirm upswd1.";     
    } else{
        $upswd2	 = trim($_POST["upswd2	"]);
        if(empty($upswd2_err) && ($upswd2 != $upswd2	))
            $upswd2_err = "Password did not match.";
        }
    }
    
    // Check input errors before inserting in database
    if(empty($uname1_err) && empty($upswd2_err) && empty($upswd2_err)){
        
        // Prepare an insert statement
        $sql = "INSERT INTO register (uname1, upswd1	) VALUES (?, ?)";
         
        if($stmt = mysqli_prepare($link, $sql)){
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "ss", $param_username, $param_password);
            
            // Set parameters
            $param_uname1 = $uname1;
            $param_upswd1 = password_hash($upswd1	, PASSWORD_DEFAULT); // Creates a password hash
            
            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt)){
                // Redirect to login page
                header("location: demologin.php");
            } else{
                echo "Something went wrong. Please try again later.";
            }

            // Close statement
            mysqli_stmt_close($stmt);
        }
    }
    
    // Close connection
    mysqli_close($link);
}
?>
 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Sign Up</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
    <style type="text/css">
        body{ font: 14px sans-serif; }
        .wrapper{ width: 350px; padding: 20px; }
    </style>
</head>
<body>
    <div class="wrapper">
        <h2>Sign Up</h2>
        <p>Please fill this form to create an account.</p>
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
            <div class="form-group <?php echo (!empty($uname1_err)) ? 'has-error' : ''; ?>">
                <label>Username</label>
                <input type="text" name="uname1" class="form-control" value="<?php echo $uname1; ?>">
                <span class="help-block"><?php echo $uname1_err; ?></span>
            </div>    
            <div class="form-group <?php echo (!empty($upswd1_err)) ? 'has-error' : ''; ?>">
                <label>Password</label>
                <input type="password" name="password" class="form-control" value="<?php echo $upswd1; ?>">
                <span class="help-block"><?php echo $upswd1_err; ?></span>
            </div>
            <div class="form-group <?php echo (!empty($confirm_password_err)) ? 'has-error' : ''; ?>">
                <label>Confirm Password</label>
                <input type="password" name="upswd2" class="form-control" value="<?php echo $upswd2; ?>">
                <span class="help-block"><?php echo $upswd2_err; ?></span>
            </div>
            <div class="form-group">
                <input type="submit" class="btn btn-primary" value="Submit">
                <input type="reset" class="btn btn-default" value="Reset">
            </div>
            <p>Already have an account? <a href="demologin.php">Login here</a>.</p>
        </form>
    </div>    
</body>
</html>