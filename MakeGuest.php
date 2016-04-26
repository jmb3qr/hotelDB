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
 $sql = $con->prepare("INSERT INTO Guest (Last_Name, First_Name, Email, Phone_Number, DOB) VALUES (?,?,?,?,?)");
 $sql->bind_param('sssss',$_POST['lastname'],$_POST['firstname'],$_POST['email'],$_POST['phonenumber'],$_POST['dob']);
 $sql->execute();


 echo "Information saved"; // Output to user
 mysqli_close($con);
 header("Location: reservationform.php")
?> 