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
 $sql="INSERT INTO Reservation (Start_Date, End_Date) VALUES ('$_POST[startdate]','$_POST[enddate]')";
 $ask="SELECT * FROM Rooms WHERE HOTEL_ID=1 AND Type='{$_POST['Type']}'";
 if (!mysqli_query($con,$sql)){
    die('Error: ' . mysqli_error($con));
 }
 $room=mysqli_query($con,$ask);
 if(!$room){
   die('Invalid query: ' . mysql_error());
 }
 echo "1 reservation added"; // Output to user
 mysqli_close($con);
?> 
