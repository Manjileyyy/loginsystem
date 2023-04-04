<?php
session_start();
include('db_conn.php');


    if(isset($_POST["reset"])){
        $psw = $_POST["password"];

        $token = $_SESSION['token'];
        $Email = $_SESSION['email'];

        $hash = password_hash( $psw , PASSWORD_DEFAULT );

        $sql = mysqli_query($conn, "SELECT * FROM users WHERE email='$email'");
        $query = mysqli_num_rows($sql);
        $fetch = mysqli_fetch_assoc($sql);

        if($Email){
            $new_pass = $hash;
            mysqli_query($conn, "UPDATE users SET password='$new_pass' WHERE email='$Email'");
            ?>
            <script>
                window.location.replace("loginn.php");
                alert("<?php echo "your password has been succesful reset"?>");
            </script>
            <?php
        }else{
            ?>
            <script>
                alert("<?php echo "Please try again"?>");
            </script>
            <?php
        }
    }

?>

