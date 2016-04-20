<?php
    define('Type', 'Type');  
 include_once("./library.php"); // To connect to the database
 $con = new mysqli($SERVER, $USERNAME, $PASSWORD, $DATABASE);
 // Check connection
 if (mysqli_connect_errno())
 {
 echo "Failed to connect to MySQL: " . mysqli_connect_error();
 }
 // Form the SQL query (an INSERT query)
 $sql="INSERT INTO Guest (Last_Name, First_Name, Email, Phone_Number, DOB) VALUES ('$_POST[lastname]','$_POST[firstname]','$_POST[email]','$_POST[phonenumber]','$_POST[dob]')";
 
 if (!mysqli_query($con,$sql)){
    die('Error: ' . mysqli_error($con));
 }
// $room=mysqli_query($con,$ask);
// if(!$room){
//   die('Invalid query: ' . mysql_error());
// }
 echo "Information saved"; // Output to user
 mysqli_close($con);
 header("Location: reservationform.php")
?> 