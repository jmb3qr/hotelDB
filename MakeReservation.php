<?php
    define('Type', 'Type');  
 include_once("./library.php"); // To connect to the database
 $con = new mysqli($SERVER, $USERNAME, $PASSWORD, $DATABASE);
 // Check connection
 if (mysqli_connect_errno())
 {
 echo "Failed to connect to MySQL: " . mysqli_connect_error();
 }
$Email = $_POST['email'];
$Start = $_POST['startdate'];
$End = $_POST['enddate'];
$Type = $_POST['type'];


 // Form the SQL query (an INSERT query)
// $sql="INSERT INTO Reservation (Start_Date, End_Date) VALUES ('$_POST[startdate]','$_POST[enddate]')";
// $ask="SELECT * FROM Rooms WHERE HOTEL_ID=1 AND Type='{$_POST['Type']}'";

$result = mysqli_query($con,"SELECT * FROM Guest WHERE Email = '$Email'");    
    if(!$result) {
        die("you suck: " . mysql_error());
    }  
$row = mysqli_fetch_array($result);
if($row == true){
     $reserved=mysqli_query($con,"Insert into Reservation (Start_Date, End_Date) VALUES ('$Start','$End')");
    if (!$reserved){
        die('Invalid query: reserved' . mysql_error());
    }
     echo "1 reservation added" ; // Output to user
     mysqli_close($con);
    }      
else{
    echo "No Guest account exists with this email";
     header("Location: costumlogin.php");
}

?> 
