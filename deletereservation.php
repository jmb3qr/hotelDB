<?php
session_start();

if(!isset($_SESSION["login"])){
$_SESSION["error"] = "You have not logged in. Please log in first";
    echo('You are not logged in'); 
    header("Location: employeelogin.php");
}
    define('Type', 'Type');  
 include_once("./library.php"); // To connect to the database
 $con = new mysqli($SERVER, $USERNAME, $PASSWORD, $DATABASE);
 // Check connection
 if (mysqli_connect_errno())
 {
 echo "Failed to connect to MySQL: " . mysqli_connect_error();
 }
 // Form the SQL query (an INSERT query)
 $sql="DELETE FROM Reservation WHERE Reservation_ID='$_POST[Rid]'";
 $assn="DELETE FROM ASSIGNED WHERE Reservation_ID='$_POST[Rid]'";
 $mak="DELETE FROM MAKES WHERE Reservation_ID='$_POST[Rid]'";
 if (!mysqli_query($con,$sql)){
    die('Error: ' . mysqli_error($con));
 }
if (!mysqli_query($con,$assn)){
    die('Error: ' . mysqli_error($con));
 }
if (!mysqli_query($con,$mak)){
    die('Error: ' . mysqli_error($con));
 }
// $room=mysqli_query($con,$ask);
// if(!$room){
//   die('Invalid query: ' . mysql_error());
// }
 echo "Reservation Deleted"; // Output to user
 mysqli_close($con);
 header("Location: recep.php");
     echo "Reservation Deleted";
?> 