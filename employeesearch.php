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

        $stmt = $con->stmt_init();

        if($stmt->prepare("select Reservation_ID, Last_Name, First_Name, Email, Phone_Number, Room_number, Start_Date, End_Date, Hotel_Name, Price from Reservation natural join MAKES natural join Guest natural join ASSIGNED natural join Rooms natural join Hotel where Last_Name like ? or First_Name like ? or Email like ? or Start_Date like ? or End_Date like ?") or die(mysqli_error($db))) {
                $searchString = '%' . $_GET['GuestName'] . '%';
                $stmt->bind_param('sssss', $searchString, $searchString, $searchString, $searchString, $searchString);
                $stmt->execute();
                $stmt->bind_result($id, $lname, $fname, $email, $phone, $num, $start, $end, $hotel, $price);
                echo "<table class=gridtable border=1><th>ID</th><th>Last Name</th><th>First Name</th><th>Email</th><th>Phone</th><th>Room</th><th>Check-in</th><th>Check-out</th><th>Location</th><th>Price</th>\n";
                while($stmt->fetch()) {
//                        $id = $row['Reservation_ID'];
//                        $lname = $row['Last_Name'];
//                        $fname = $row['First_Name'];
//                        $email = $row['Email'];
//                        $phone = $row['Phone_Number'];
//                        $num = $row['Room_Number'];
//                        $start = $row['Start_Date'];
//                        $end = $row['End_Date'];
//                        $hotel = $row['Hotel_Name'];
                        echo "<tr><td>$id</td><td>$lname</td><td>$fname</td><td>$email</td><td>$phone</td><td>$num</td><td>$start</td><td>$end</td><td>$hotel</td><td>$price</td></tr>";
                }
                echo "</table>";

                $stmt->close();
        }



        $con->close();
        

        
        
?>