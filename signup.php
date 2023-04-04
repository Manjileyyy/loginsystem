


<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Sign Up</title>
	<link rel="stylesheet" type="text/css" href="style.css">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

	

	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css">
	
	
	<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600&display=swap">
<script src="https://kit.fontawesome.com/191e20cca4.js" crossorigin="anonymous"></script>
		    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
 
	
		
		
</head>
<body>	
	<div class="container">
		<form  class="form-horizontal"
				action="validate.php" 
				method="post" 
				id="validateForm">
			<h2>Create a New Account </h2>
			<?php if(isset($_GET['error'])){ ?>
    		<div class="alert alert-danger" role="alert">
			  <?php echo $_GET['error']; ?>
			</div>
		    <?php } ?>

		    <?php if(isset($_GET['success'])){ ?>

    		<div class="alert alert-success" role="alert">
			  <?php echo $_GET['success']; ?>
			 </div>
		    <?php } ?>
			<fieldset>
				<div class="form-group">
					<label for="textInput" class="col-md-12 control-label">
						Fullname
					</label>
					<div class="col-md-12">
					<input type="text" 
							id="fname" 
							class="form-control input-md"
							name="fname" 
							placeholder="Enter your Fullname"
							value="<?php echo (isset($_GET['fname']))?$_GET['fname']:"" ?>"
							required>
						</div>
					</div>
				<div class="form-group">
					<label for="textInput" class="col-md-12 control-label">
						Email
					</label>
					<div class="col-md-12">
					<input type="text" 
							id="email" 
							class="form-control input-md"
							name="email" 
							placeholder="Enter your Email"
							value="<?php echo (isset($_GET['email']))?$_GET['email']:"" ?>">
		  		</div>
		 	 	</div>
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
								minlength="8"	
								>
						<span class="show-pass" onclick="toggle()">
							<i class="far fa-eye" onclick="myFunction(this)"></i>
						</span>
					</div>
				</div>
						<div id="popover-password">
							<p><span id="result"></span></p>
							<div class="progress">
								<div id="password-strength" class="progress-bar"
								role="progressbar" aria-valuenow="40" aria-valuemin="0"
								aria-valuemax="100" style="width: 0%;">
								</div>
							</div>
						</div>
						<ul class="list-unstyled">
							<li>
								<span class="low-upper-case">
									<i class="fas fa-circle" aria-hidden="true"></i>
									Lowercase &amp; UpperCase
								</span>
							</li>
							<li>
								<span class="one-number">
									<i class="fas fa-circle" aria-hidden="true"></i>
									Number (0-9)
								</span>
							</li>
							<li>
								<span class="one-special-char">
									<i class="fas fa-circle" aria-hidden="true"></i>
									Special character (!@#$%^&*)
								</span>
							</li>
							<li>
								<span class="eight-character">
									<i class="fas fa-circle" aria-hidden="true"></i>
									Atleast 8 character
								</span>
							</li>
						</ul>
					
				<div class="form-group">	
				<label  class="col-md-12 control-label">
					</label>				
					<div class="col-md-12">
					<div class="g-recaptcha" name ="submit" data-sitekey="6LfWFtAgAAAAAJ10jbKoqddrvIza-TTZ7HYbavFR"></div>
     				</div>
     			</div>
				<!-- <div class="col-md-10 text-left">
					<p><i class="bi bi-arrow-right-circle-fill"></i><a href="password.php"> Next </a> </p>
				</div> -->
     			<div>
					<button type="submit" class="btn login-btn btn-block"  >
						Create Account</button>
				</div>
				<div class="ex-account text-center">
					<p>Already have an account?<a href="loginn.php"> Sign in</a> </p>
				</div>
							</fieldset>
		</form>

	</div>


</body>
</html>
	<script src="js/read.js"></script>
