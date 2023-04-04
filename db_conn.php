<?php 

$sName = "localhost";
$email = "root";
$pass = "";
$db_name = "auth_db";

$conn = new mysqli($sName, $email, $pass, $db_name);


// try {
//     $conn = new PDO("mysql:host=$sName;dbname=$db_name", 
//                     $email, $pass);
//     $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
// }catch(PDOException $e){
//   echo "Connection failed : ". $e->getMessage();
// }