<?php

session_start();
$sessionUsername = $_POST['email'];
$sessionPassword = $_POST['password'];


    define('Type', 'Type');  
 include_once("./library.php"); // To connect to the database
 $con = new mysqli($SERVER, $USERNAME, $PASSWORD, $DATABASE);
 // Check connection
 if (mysqli_connect_errno())
 {
 echo "Failed to connect to MySQL: " . mysqli_connect_error();
 }
$Email = $_POST['email'];
$Password = $_POST['password'];

$Email = $con->real_escape_string($Email);
$Password = $con->real_escape_string($Password);
    
$login = mysqli_query($con, "SELECT * FROM Employee WHERE Email ='$Email' AND Last_Name='$Password'");
$row = mysqli_fetch_array($login);

if($row == true){
    
    $_SESSION["login"]= "true";
    
    header("Location: recep.php");
}
else{
    echo "Invalid Credentials.";
}
 // Form the SQL query (an INSERT query)
// $sql="INSERT INTO Reservation (Start_Date, End_Date) VALUES ('$_POST[startdate]','$_POST[enddate]')";
// $ask="SELECT * FROM Rooms WHERE HOTEL_ID=1 AND Type='{$_POST['Type']}'";

//$result = mysqli_query($con,"SELECT * FROM Guest WHERE Email = '$Email'");    
//    if(!$result) {
//        die("you suck: " . mysql_error());
//    }  
//$row = mysqli_fetch_array($result);
//    
//else{
//    echo "No Guest account exists with this email";
//     header("Location: costumlogin.php");
//}

?> 
