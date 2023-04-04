77777


<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Sign Up</title>
		<link rel="stylesheet" type="text/css" href="style.css">

	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

	<script src="https://kit.fontawesome.com/191e20cca4.js" crossorigin="anonymous"></script>

	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css">
	
	
	<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600&display=swap">
</head>
<body>
	<!-- <nav>
         <a ><img src="Pictures/sun.jpg"></a>
        </nav> -->
	<div class="container email-container">
		<form  class="form-horizontal" 
				action="login.php"
				method="post"
				id="validateForm">
			<h1>Welcome </h1>
			<br>
			<?php if(isset($_GET['error'])){ ?>
    		<div class="alert alert-danger" role="alert">
			  <?php echo $_GET['error']; ?>
			</div>
		    <?php } ?>

			<fieldset>
				
				<div class="form-group">
					<label for="textInput" class="col-md-12 control-label">
						Email
					</label>
					<div class="col-md-12">
					<input type="email" 
							id="email" 
							class="form-control input-md"
							name="email" 
							placeholder="Enter your Email"
							value="<?php echo (isset($_GET['email']))?$_GET['email']:"" ?>"
							required>
							<span class="email-error"></span>
				 
				<div class="form-group">
					<label for="passwordInput" class="col-md-12 control-label">
						Password
					</label>
					<div class="col-md-12">
						<input type="password" 
								id="password" 
								class="form-control input-md"
								name="password" 
								placeholder="Enter Your Password"
								required>
						<span class="show-pass" onclick="toggle()">
							<i class="far fa-eye" onclick="myFunction(this)"></i>
						</span> <br>
			
				<div >
					<button type="submit" class="btn login-btn btn-block"  >
						Log in</button>

				</div>
				<div class="ex-account text-center">
					<p>Create a New Account?<a href="signup.php"> Sign up</a> </p>
				</div>
				
				<div class="ex-account text-center">
					<p>Forgot password?<a href="recoverpw1.php"> Click here !</a> </p>
				</div>

			</fieldset>
		</form>
	</div>
	<script src="read.js"></script>
</body>
</html>
