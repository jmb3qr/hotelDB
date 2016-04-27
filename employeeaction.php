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


        $view = '%' . $_GET['whichtable'] . '%';
        if($view=="%reservation%"){
//            $sql="select * from Reservation natural join MAKES natural join Guest natural join ASSIGNED natural join Rooms natural join Hotel ORDER BY Reservation_ID";
            $sql="select * from DisplayReserve";
            $result=mysqli_query($con,$sql) or die('Error: ' . mysqli_error($con));
            echo"<h3>Reservations</h3>";
            echo "<table class=gridtable border=1><th>ID</th><th>Last Name</th><th>First Name</th><th>Location</th><th>Room</th><th>Check-in</th><th>Check-out</th><th>Type</th><th>Price</th>\n";
            while($row = $result->fetch_assoc()){
                $id = $row['Reservation_ID'];
                $lname = $row['Last_Name'];
                $fname = $row['First_Name'];
                $num = $row['Room_Number'];
                $type = $num = $row['Type'];
                $start = $row['Start_Date'];
                $price = $row['Price'];
                $end = $row['End_Date'];
                $hotel = $row['Hotel_Name'];
                echo "<tr><td>$id</td><td>$lname</td><td>$fname</td><td>$hotel</td><td>$num</td><td>$start</td><td>$end</td><td>$type</td><td>$price</td></tr>";
            

        }
            echo "</table>";
        }
        if($view=="%guest%"){
            $sql="select * from Guest";
            $result=mysqli_query($con,$sql) or die('Error: ' . mysqli_error($con));
            echo"<h3>Guests</h3>";
            echo "<table class=gridtable border=1><th>Last Name</th><th>First Name</th><th>Phone</th><th>Email</th><th>Date of Birth</th>\n";
            while($row = $result->fetch_assoc()){
                $lname = $row['Last_Name'];
                $fname = $row['First_Name'];
                $email = $row['Email'];
                $phone = $row['Phone_Number'];
                $dob = $row['DOB'];
                echo "<tr><td>$lname</td><td>$fname</td><td>$phone</td><td>$email</td><td>$dob</td></tr>";
            

        }
            echo "</table>";
        }
        if($view=="%employee%"){
            $sql="select * from Employee";
            $result=mysqli_query($con,$sql) or die('Error: ' . mysqli_error($con));
            echo"<h3>Employees</h3>";
            echo "<table class=gridtable border=1><th>Last Name</th><th>First Name</th><th>Phone</th><th>Email</th>\n";
            while($row = $result->fetch_assoc()){
                $lname = $row['Last_Name'];
                $fname = $row['First_Name'];
                $email = $row['Email'];
                $phone = $row['Phone_Number'];
                echo "<tr><td>$lname</td><td>$fname</td><td>$phone</td><td>$email</td></tr>";
            

        }
            echo "</table>";
        }
        if($view=="%bills%"){
            $sql="select * from DisplayBills";
            $result=mysqli_query($con,$sql) or die('Error: ' . mysqli_error($con));
            echo"<h3>Bills</h3>";
            echo "<table class=gridtable border=1><th>Bill No</th><th>Last Name</th><th>First Name</th><th>Amount</th>\n";
            while($row = $result->fetch_assoc()){
                $lname = $row['Last_Name'];
                $fname = $row['First_Name'];
                $billno = $row['BILL_ID'];
                $amt = $row['Total'];
                echo "<tr><td>$billno</td><td>$lname</td><td>$fname</td><td>$amt</td></tr>";
            

        }
            echo "</table>";
        }
     

        $con->close();
        
//        if($stmt->prepare("select * from Reservations natural join MAKES natural join Guest natural join ASSIGNED natural join Rooms") or die(mysqli_error($con))) {
//                $searchString = '%' . $_GET['searchLastName'] . '%';
//                $stmt->bind_param(s, $searchString);
//                $stmt->execute();
//                $stmt->bind_result($FirstN, $LastN, $Age);
//                echo "<table border=1><th>First Name</th><th>Last Name</th><th>Age</th>\n";
//                while($stmt->fetch()) {
//                        echo "<tr><td>$FirstN</td><td>$LastN</td><td>$Age</td></tr>";
//                }
//                echo "</table>";
//
//                $stmt->close();
//        }
//
//        $con->close();
        
        
?>
