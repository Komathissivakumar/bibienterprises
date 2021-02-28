<?php
$con=mysqli_connect("localhost","root","","fregister");
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8"/>
<meta name="viewport" content="width=device-width,initial-scale=1.0"/>
<meta http-equiv="X-UA-Compatible" content="ie=edge"/>
<link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>

<link rel="stylesheet" href="sign.css"/>

</head>
<body>

<div class="container" id="container">
	<div class="form-container sign-up-container">
		<form action="nav.php">
			<h1>Create Account</h1>
			
			
			<input type="text" name="username" placeholder="Name" / required>
			<input type="email" name="email" placeholder="Email" /required>
			<input type="password" name="password" placeholder="Password" /required>
			<input type="password" name="repassword" placeholder="Retype-Password" /required>
			<button>Sign Up</button>
		</form>
	</div>
	<div class="form-container sign-in-container">
		<form action="nav.php">
			<h1>Sign in</h1>
			
			<input type="email" placeholder="Email" /required>
			<input type="password" placeholder="Password" /required>
			<a href="#">Forgot your password?</a>
			
			<button>Sign In</button>
		</form>
	</div>
	<div class="overlay-container">
		<div class="overlay">
			<div class="overlay-panel overlay-left">
				<h1>Welcome Back!</h1>
				<p>To keep connected with us please login with your personal info</p>
				<button class="ghost" id="signIn">Sign In</button>
			</div>
			<div class="overlay-panel overlay-right">
				<h1>BIBI ENTERPRISES</h1>
				<p>Enter your personal details and start journey with us</p>
				<button class="ghost" id="signUp">Sign Up</button>
			</div>
		</div>
	</div>
</div>
<script>
const signUpButton = document.getElementById('signUp');
const signInButton = document.getElementById('signIn');
const container = document.getElementById('container');

signUpButton.addEventListener('click', () => {
	container.classList.add("right-panel-active");
});

signInButton.addEventListener('click', () => {
	container.classList.remove("right-panel-active");
});
</script>
</body>
</html>
