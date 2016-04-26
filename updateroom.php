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
  $stmt = $con->stmt_init();

        if($stmt->prepare("select Vacant from Rooms where Hotel_ID = ? and Room_Number = ?") or die(mysqli_error($db))) {
                $hotel = $_POST['Hid'];
                $room = $_POST['room'];
                $stmt->bind_param('ss', $hotel, $room);
                $stmt->execute();
                $stmt->store_result();
                $stmt->bind_result($vac);
                if($stmt->fetch()){
                    if($vac == 1){
                        $update=mysqli_query($con, "UPDATE Rooms SET Vacant = '0' WHERE Hotel_ID = '$hotel' AND Room_Number = '$room'");
//                         if (!mysqli_query($con,$update)){
//                            die('Error: update3' . mysqli_error($con));
//                         }
                    }
                    else{
                        $update=mysqli_query($con, "UPDATE Rooms SET Vacant = '1' WHERE Hotel_ID = '$hotel' AND Room_Number = '$room'");
//                          if (!mysqli_query($con,$update)){
//                            die('Error: upadte3 ' . mysqli_error($con));
//                         }
                    }
                    
                }
        }
// $room=mysqli_query($con,$ask);
// if(!$room){
//   die('Invalid query: ' . mysql_error());
// }
 mysqli_close($con);
header("Location: recep.php");
?> 