<?php

session_start();
$sessionUsername = $_POST['username'];
$sessionPassword = $_POST['password'];
ini_set('display_errors', 1);


    define('Type', 'Type');  
 include_once("./library.php"); // To connect to the database
 $logincon = new mysqli($SERVER, $LOGINUSER, $LOGINPASSWORD, $LOGINDATABASE);
 // Check connection
 if (mysqli_connect_errno())
 {
 echo "Failed to connect to MySQL: " . mysqli_connect_error();
 }

$Username = $_POST['username'];
$Password = $_POST['password'];
$hashedpassword = hash("sha256",$Password);
 
    
$stmt = $logincon->prepare("SELECT Username FROM EmployeeLogin WHERE Username = ? AND Password= ? ");
$stmt->bind_param('ss', $Username, $hashedpassword);
$stmt->execute();
$stmt->bind_result($user);
  
if($stmt->fetch()){
    
    $_SESSION["login"]= "true";
    
    header("Location: recep.php");
}
else{
    echo "Invalid Credentials.";
}


?> 
