<?php 
#
if(isset($_POST['fname']) && 
   isset($_POST['email']) && 
   isset($_POST['password'])){


    $fname = $_POST["fname"];
    $email = $_POST["email"];
    $pass = $_POST["password"]; 

    include ("../db_conn.php");



    $data = "fname=".$fname."&email=".$email;
    
    if (empty($fname && $email && $pass)){
      $em = "Please fill the required information.";
      header("Location: ../signup.php?error=$em&$data");
    
      exit;
    }
      elseif(empty($fname)) {
    	$em = "Full name is required";
    	header("Location: ../signup.php?error=$em&$data");
	    exit;
    }else if(empty($email)){
    	$em = "User name is required";
    	header("Location: ../signup.php?error=$em&$data");
	    exit;
    }else if(empty($pass)){

    	$em = "Please check your password";

    	header("Location: ../signup.php?error=$em&$data");
	    exit;
    }
   
    else{
    	// hashing the password
    	$pass = password_hash($pass, PASSWORD_DEFAULT);
      // Given password


    	$sql = "INSERT INTO users(fname, email, password) 
    	        VALUES(?,?,?)";
    	$stmt = $conn->prepare($sql);
    	$stmt->execute([$fname, $email, $pass]);

    	header("Location: ../login.php?success=Your account has been created successfully");
	    exit;
    }
    


 else {
	header("Location: ../signup.php?error=error");
	exit;
}

------------------------------------------------------------------------------------------------------

<?php 
session_start();
include('../db_conn.php');


if(isset($_POST['email']) && 
   isset($_POST['password'])){


    $email = $_POST['email'];
    $pass = $_POST['password'];

    $data = "email=".$email;
    
    if (empty( $email && $pass)){
      $em = "Please fill the required information";
      header("Location: ../login.php?error=$em&$data");
      exit;
    }
    else {

      $sql = "SELECT * FROM users WHERE email = ?";
      $stmt = $conn->prepare($sql);
      $stmt->execute([$email]);

      if($stmt->rowCount() == 1){
          $user = $stmt->fetch();

          $email =  $user['email'];
          $pass =  $user['password'];
          $fname =  $user['fname'];
          $id =  $user['id'];
          // $confirm_password =$_POST['confirm_password'];
          if($email === $email){
             // if(password_verify($pass, $password)){
             //     $_SESSION['id'] = $id;
             //     $_SESSION['fname'] = $fname;

                 header("Location: ../two.php");
                 exit;
             }

             else {
               $em = "Incorect Email or password";
               header("Location: ../login.php?error=$em&$data");
               exit;
            }

          }else {
            $em = "Incorect Email or password";
            header("Location: ../login.php?error=$em&$data");
            exit;
         }

      }
      // else {
      //    $em = "Incorect Email or password";
      //    header("Location: ../login.php?error=$em&$data");
      //    exit;
      // }
    }


else {
  header("Location: ../login.php?error=error");
  exit;
}