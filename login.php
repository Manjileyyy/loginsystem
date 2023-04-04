<?php
session_start();
include('db_conn.php');
//Import PHPMailer classes into the global namespace
//These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

//Load Composer's autoloader
require('C:\xampp\htdocs\Complete\mail\phpmailer\PHPMailer.php');
require('C:\xampp\htdocs\Complete\mail\phpmailer\SMTP.php');
require('C:\xampp\htdocs\Complete\mail\phpmailer\Exception.php');





 if(isset($_POST['email']) && 
   isset($_POST['password'])
   // && isset($_POST['mail'])
){


    $email = $_POST['email'];
    $pass = $_POST['password'];
    $mail = new PHPMailer(true);
    $data = "email=".$email;
    
    if (empty( $email && $pass)){
      $em = "Please fill the required information";
      header("Location: ../login.php?error=$em&$data");
      exit;
    }
    else {

      
        $sql = "SELECT * FROM users WHERE email = ?";
        $query = mysqli_num_rows($sql);
        $fetch = mysqli_fetch_assoc($sql);


if ($sql) {
    $otp = rand(100000,999999);
    $_SESSION['otp'] = $otp;
    $_SESSION['mail'] = $email;
    //Server settings
    // $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
    $mail->isSMTP();                                            //Send using SMTP
    $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
    $mail->Username   = 'magarmanjil8@gmail.com';                     //SMTP username
    $mail->Password   = 'ivqedymcqrybflhi';                               //SMTP password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
    $mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

    //Recipients
    $mail->setFrom('magarmanjil8@gmail.com', 'OTP');
    $mail->addAddress($_POST["email"]);     //Add a recipient
   

    //Content
    $mail->isHTML(true);                                  //Set email format to HTML
    $mail->Subject="Your verify code";
    $mail->Body="<p>Dear user, </p> <h3>Your verify OTP code is $otp <br></h3>";

   if(!$mail->send()){
                                ?>
                                    <script>
                                        alert("<?php echo "Register Failed, Invalid Email "?>");
                                    </script>
                                <?php
                            }else{
                                ?>
                                <script>
                                    alert("<?php echo "Register Successfully, OTP sent to " . $email ?>");
                                    window.location.replace('two.php');
                                </script>
                                <?php
                            }

} 
}
}