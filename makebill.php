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
$Amount = $_POST['amt'];
$Discount = "0.00";
$Guest = $_POST['guest'];
$Payment = $_POST['method'];




$stmt = $con->prepare("SELECT Guest_ID FROM Guest WHERE Guest_ID = ?");
$stmt->bind_param('s', $Guest);
$stmt->execute();
$stmt->store_result();
$stmt->bind_result($gid);
if($stmt->fetch()){
    $billinsert=mysqli_query($con,"Insert into Bill (Total, Discount, Type_Payment) VALUES ('$Amount','$Discount', '$Payment')");
    $id = $con->insert_id;
    $paysinsert=mysqli_query($con, "Insert into PAYS (Guest_ID, BILL_ID) VALUES ('$Guest','$id')");
    mysqli_close($con);
 header("Location: recep.php");
}
else{
    mysqli_close($con);
    header("Location: recep.php");
}
?> 