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
$Email = $_POST['email'];
$Start = $_POST['startdate'];
$End = $_POST['enddate'];
$Type = $_POST['type'];
$Hotel = $_POST['hotel'];



$stmt = $con->prepare("SELECT Guest_ID FROM Guest WHERE Email = ?");
$stmt->bind_param('s', $Email);
$stmt->execute();
$stmt->store_result();
$stmt->bind_result($id);
if($stmt->fetch()){
    if($Hotel == 1 ){
        if($Type == "doubles"){
            $reserved=mysqli_query($con,"Insert into Reservation (Start_Date, End_Date) VALUES ('$Start','$End')");
            $idd = $con->insert_id;
                $makes=mysqli_query($con,"Insert into MAKES (Reservation_ID, Guest_ID) VALUES ('$idd','$id')");
                if (!$makes){
                    die('Reservation created, Date conficts exist. Return to employee page.');
                }
                $assigned=mysqli_query($con, "Insert into ASSIGNED VALUES ('1','102','$idd')");
                if (!$assigned){
                    die('Reservation created, Room conficts exist. Return to employee page.');
                }
                 echo "Reservation confirmed. Confirmation Number: "; 
                 echo $idd;
                 mysqli_close($con);
        }
        if($Type == "king"){
            $reserved=mysqli_query($con,"Insert into Reservation (Start_Date, End_Date) VALUES ('$Start','$End')");
            $idd = $con->insert_id;
                $makes=mysqli_query($con,"Insert into MAKES (Reservation_ID, Guest_ID) VALUES ('$idd','$id')");
                if (!$makes){
                    die('Reservation created, Date conficts exist. Return to employee page.');
                }
                $assigned=mysqli_query($con, "Insert into ASSIGNED VALUES ('1','106','$idd')");
                if (!$assigned){
                    die('Reservation created, Room conficts exist. Return to employee page.');
                }
                 echo "Reservation confirmed. Confirmation Number: "; 
                 echo $idd;
                 mysqli_close($con);
        }
        if($Type == "suite"){
            $reserved=mysqli_query($con,"Insert into Reservation (Start_Date, End_Date) VALUES ('$Start','$End')");
            $idd = $con->insert_id;
                $makes=mysqli_query($con,"Insert into MAKES (Reservation_ID, Guest_ID) VALUES ('$idd','$id')");
                if (!$makes){
                    die('Reservation created, Date conficts exist. Return to employee page.');
                }
                $assigned=mysqli_query($con, "Insert into ASSIGNED VALUES ('1','204','$idd')");
                if (!$assigned){
                    die('Reservation created, Room conficts exist. Return to employee page.');
                }
                 echo "Reservation confirmed. Confirmation Number: "; 
                 echo $idd;
                 mysqli_close($con);
        }
    }
     if($Hotel == 2 ){
        if($Type == "doubles"){
            $reserved=mysqli_query($con,"Insert into Reservation (Start_Date, End_Date) VALUES ('$Start','$End')");
            $idd = $con->insert_id;
                $makes=mysqli_query($con,"Insert into MAKES (Reservation_ID, Guest_ID) VALUES ('$idd','$id')");
                if (!$makes){
                    die('Reservation created, Date conficts exist. Return to employee page.');
                }
                $assigned=mysqli_query($con, "Insert into ASSIGNED VALUES ('2','305','$idd')");
                if (!$assigned){
                    die('Reservation created, Room conficts exist. Return to employee page.');
                }
                 echo "Reservation confirmed. Confirmation Number: "; 
                 echo $idd;
                 mysqli_close($con);
        }
        if($Type == "king"){
            $reserved=mysqli_query($con,"Insert into Reservation (Start_Date, End_Date) VALUES ('$Start','$End')");
            $idd = $con->insert_id;
                $makes=mysqli_query($con,"Insert into MAKES (Reservation_ID, Guest_ID) VALUES ('$idd','$id')");
                if (!$makes){
                    die('Reservation created, Date conficts exist. Return to employee page.');
                }
                $assigned=mysqli_query($con, "Insert into ASSIGNED VALUES ('2','103','$idd')");
                if (!$assigned){
                    die('Reservation created, Room conficts exist. Return to employee page.');
                }
                 echo "Reservation confirmed. Confirmation Number: "; 
                 echo $idd;
                 mysqli_close($con);
        }
        if($Type == "suite"){
            $reserved=mysqli_query($con,"Insert into Reservation (Start_Date, End_Date) VALUES ('$Start','$End')");
            $idd = $con->insert_id;
                $makes=mysqli_query($con,"Insert into MAKES (Reservation_ID, Guest_ID) VALUES ('$idd','$id')");
                if (!$makes){
                    die('Reservation created, Date conficts exist. Return to employee page.');
                }
                $assigned=mysqli_query($con, "Insert into ASSIGNED VALUES ('2','101','$idd')");
                if (!$assigned){
                    die('Reservation created, Room conficts exist. Return to employee page.');
                }
                 echo "Reservation confirmed. Confirmation Number: "; 
                 echo $idd;
                 mysqli_close($con);
        }
    }
     if($Hotel == 3 ){
        $reserved=mysqli_query($con,"Insert into Reservation (Start_Date, End_Date) VALUES ('$Start','$End')");
        $idd = $con->insert_id;
            $makes=mysqli_query($con,"Insert into MAKES (Reservation_ID, Guest_ID) VALUES ('$idd','$id')");
            if (!$makes){
                die('Reservation created, Date conficts exist. Return to employee page.');
            }
            $assigned=mysqli_query($con, "Insert into ASSIGNED VALUES ('3','4','$idd')");
            if (!$assigned){
                die('Reservation created, Room conficts exist. Return to employee page.');
            }
             echo "Reservation confirmed. Confirmation Number: "; 
             echo $idd;
             mysqli_close($con);
    }
      if($Hotel == 4 ){
        if($Type == "doubles"){
            $reserved=mysqli_query($con,"Insert into Reservation (Start_Date, End_Date) VALUES ('$Start','$End')");
            $idd = $con->insert_id;
                $makes=mysqli_query($con,"Insert into MAKES (Reservation_ID, Guest_ID) VALUES ('$idd','$id')");
                if (!$makes){
                    die('Reservation created, Date conficts exist. Return to employee page.');
                }
                $assigned=mysqli_query($con, "Insert into ASSIGNED VALUES ('4','103','$idd')");
                if (!$assigned){
                    die('Reservation created, Room conficts exist. Return to employee page.');
                }
                 echo "Reservation confirmed. Confirmation Number: "; 
                 echo $idd;
                 mysqli_close($con);
        }
        if($Type == "king"){
            $reserved=mysqli_query($con,"Insert into Reservation (Start_Date, End_Date) VALUES ('$Start','$End')");
            $idd = $con->insert_id;
                $makes=mysqli_query($con,"Insert into MAKES (Reservation_ID, Guest_ID) VALUES ('$idd','$id')");
                if (!$makes){
                    die('Reservation created, Date conficts exist. Return to employee page.');
                }
                $assigned=mysqli_query($con, "Insert into ASSIGNED VALUES ('4','302','$idd')");
                if (!$assigned){
                    die('Reservation created, Room conficts exist. Return to employee page.');
                }
                 echo "Reservation confirmed. Confirmation Number: "; 
                 echo $idd;
                 mysqli_close($con);
        }
        if($Type == "suite"){
            $reserved=mysqli_query($con,"Insert into Reservation (Start_Date, End_Date) VALUES ('$Start','$End')");
            $idd = $con->insert_id;
                $makes=mysqli_query($con,"Insert into MAKES (Reservation_ID, Guest_ID) VALUES ('$idd','$id')");
                if (!$makes){
                    die('Reservation created, Date conficts exist. Return to employee page.');
                }
                $assigned=mysqli_query($con, "Insert into ASSIGNED VALUES ('4','305','$idd')");
                if (!$assigned){
                    die('Reservation created, Room conficts exist. Return to employee page.');
                }
                 echo "Reservation confirmed. Confirmation Number: "; 
                 echo $idd;
                 mysqli_close($con);
        }
    }
      if($Hotel == 5 ){
        if($Type == "doubles"){
            $reserved=mysqli_query($con,"Insert into Reservation (Start_Date, End_Date) VALUES ('$Start','$End')");
            $idd = $con->insert_id;
                $makes=mysqli_query($con,"Insert into MAKES (Reservation_ID, Guest_ID) VALUES ('$idd','$id')");
                if (!$makes){
                    die('Reservation created, Date conficts exist. Return to employee page.');
                }
                $assigned=mysqli_query($con, "Insert into ASSIGNED VALUES ('5','107','$idd')");
                if (!$assigned){
                    die('Reservation created, Room conficts exist. Return to employee page.');
                }
                 echo "Reservation confirmed. Confirmation Number: "; 
                 echo $idd;
                 mysqli_close($con);
        }
        if($Type == "king"){
            $reserved=mysqli_query($con,"Insert into Reservation (Start_Date, End_Date) VALUES ('$Start','$End')");
            $idd = $con->insert_id;
                $makes=mysqli_query($con,"Insert into MAKES (Reservation_ID, Guest_ID) VALUES ('$idd','$id')");
                if (!$makes){
                    die('Reservation created, Date conficts exist. Return to employee page.');
                }
                $assigned=mysqli_query($con, "Insert into ASSIGNED VALUES ('5','206','$idd')");
                if (!$assigned){
                    die('Reservation created, Room conficts exist. Return to employee page.');
                }
                 echo "Reservation confirmed. Confirmation Number: "; 
                 echo $idd;
                 mysqli_close($con);
        }
        if($Type == "suite"){
            $reserved=mysqli_query($con,"Insert into Reservation (Start_Date, End_Date) VALUES ('$Start','$End')");
            $idd = $con->insert_id;
                $makes=mysqli_query($con,"Insert into MAKES (Reservation_ID, Guest_ID) VALUES ('$idd','$id')");
                if (!$makes){
                    die('Reservation created, Date conficts exist. Return to employee page.');
                }
                $assigned=mysqli_query($con, "Insert into ASSIGNED VALUES ('5','204','$idd')");
                if (!$assigned){
                    die('Reservation created, Room conficts exist. Return to employee page.');
                }
                 echo "Reservation confirmed. Confirmation Number: "; 
                 echo $idd;
                 mysqli_close($con);
        }
    }
      if($Hotel == 6 ){
        if($Type == "doubles"){
            $reserved=mysqli_query($con,"Insert into Reservation (Start_Date, End_Date) VALUES ('$Start','$End')");
            $idd = $con->insert_id;
                $makes=mysqli_query($con,"Insert into MAKES (Reservation_ID, Guest_ID) VALUES ('$idd','$id')");
                if (!$makes){
                    die('Reservation created, Date conficts exist. Return to employee page.');
                }
                $assigned=mysqli_query($con, "Insert into ASSIGNED VALUES ('6','3','$idd')");
                if (!$assigned){
                    die('Reservation created, Room conficts exist. Return to employee page.');
                }
                 echo "Reservation confirmed. Confirmation Number: "; 
                 echo $idd;
                 mysqli_close($con);
        }
        if($Type == "king"){
            $reserved=mysqli_query($con,"Insert into Reservation (Start_Date, End_Date) VALUES ('$Start','$End')");
            $idd = $con->insert_id;
                $makes=mysqli_query($con,"Insert into MAKES (Reservation_ID, Guest_ID) VALUES ('$idd','$id')");
                if (!$makes){
                    die('Reservation created, Date conficts exist. Return to employee page.');
                }
                $assigned=mysqli_query($con, "Insert into ASSIGNED VALUES ('6','6','$idd')");
                if (!$assigned){
                    die('Reservation created, Room conficts exist. Return to employee page.');
                }
                 echo "Reservation confirmed. Confirmation Number: "; 
                 echo $idd;
                 mysqli_close($con);
        }
        if($Type == "suite"){
            $reserved=mysqli_query($con,"Insert into Reservation (Start_Date, End_Date) VALUES ('$Start','$End')");
            $idd = $con->insert_id;
                $makes=mysqli_query($con,"Insert into MAKES (Reservation_ID, Guest_ID) VALUES ('$idd','$id')");
                if (!$makes){
                    die('Reservation created, Date conficts exist. Return to employee page.');
                }
                $assigned=mysqli_query($con, "Insert into ASSIGNED VALUES ('6','8','$idd')");
                if (!$assigned){
                    die('Reservation created, Room conficts exist. Return to employee page.');
                }
                 echo "Reservation confirmed. Confirmation Number: "; 
                 echo $idd;
                 mysqli_close($con);
        }
    }

}
        
else{
    echo "No Guest account exists with this email";
     header("Location: costumlogin.php");
}

?> 
