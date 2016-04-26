<?php
ini_set('display_errors', 1);
    define('Type', 'Type');  
 include_once("./library.php"); // To connect to the database
 $con = new mysqli($SERVER, $USERNAME, $PASSWORD, $DATABASE);
 // Check connection
 if (mysqli_connect_errno())
 {
 echo "Failed to connect to MySQL: " . mysqli_connect_error();
 }
$Reservation = $_POST['Rid'];
$Room = $_POST['newroom'];




$stmt = $con->prepare("SELECT HOTEL_ID FROM Reservation NATURAL JOIN ASSIGNED NATURAL JOIN MAKES WHERE Reservation_ID = ?");
$stmt->bind_param('s', $Reservation);
$stmt->execute();
$stmt->store_result();
$stmt->bind_result($hid);
if($stmt->fetch()){
    $stmt2 = $con->prepare("SELECT Room_Number FROM Rooms WHERE HOTEL_ID = ? AND Room_Number = ?");
    $stmt2->bind_param('ss', $hid, $Room);
    $stmt2->execute();
    $stmt2->store_result();
    $stmt2->bind_result($newroom);
    if($stmt2->fetch()){
        $update=mysqli_query($con, "UPDATE ASSIGNED SET Room_number = '$newroom' WHERE Reservation_ID = '$Reservation'");
    }
}
 mysqli_close($con);
 header("Location: recep.php");
?> 
