<?php
session_start();
include('db_conn.php');
if (isset($_POST['g-recaptcha-response']) && !empty($_POST['g-recaptcha-response'])) {
    //your site secret key

    $secret = '6LfWFtAgAAAAAF4vWet7XYtb04-6I_a4Yg963ITQ';
    //get verify response data
    $verifyResponse = file_get_contents('https://www.google.com/recaptcha/api/siteverify?secret=' . $secret . '&response=' . $_POST['g-recaptcha-response']);
    $responseData = json_decode($verifyResponse);
    print_r($responseData);

    // $name = !empty($_POST['name']) ? $_POST['name'] : '';
    // $email = !empty($_POST['email']) ? $_POST['email'] : '';
    // $message = !empty($_POST['message']) ? $_POST['message'] : '';
    // $user_id = $_SESSION['otpid'];
    if ($responseData->success) {
        $_SESSION['sign_msg'] = "Verified";
        header('validate.php');
        //start
        if ($_SERVER["REQUEST_METHOD"] == "POST") {

            function check_input($data)
            {
                $data = trim($data);
                $data = stripslashes($data);
                $data = htmlspecialchars($data);
                return $data;
            }
            $fname= check_input($_POST['fname']);
            $email = check_input($_POST['email']);
            $pass = check_input($_POST['password']);

        $check_query = mysqli_query($connect, "SELECT * FROM users where email ='$email'");
        $rowCount = mysqli_num_rows($check_query);

         if(!empty($email) && !empty($pass)){
            if($rowCount > 0){
                ?>
                <script>
                    alert("User with email already exist!");
                </script>
                <?php
            }

    else{
    	//hashing the password
    	$password_hash = password_hash($pass, PASSWORD_DEFAULT);


    	$result = mysqli_query($conn, "INSERT INTO users (fname, email, password, status) VALUES ('$fname','$email', '$password_hash', 0)");

        if($result){

            
    	header("Location: loginn.php?success=Your account has been created successfully");
	    exit;
    }
   	}

        //end
    }
}
}
}

     else {
        $_SESSION['sign_msg'] = 'Robot verification failed, please try again.';
        header('location:signup.php');
    } 



