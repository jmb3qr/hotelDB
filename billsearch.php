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

        if($stmt->prepare("select Bill_ID, Last_Name, First_Name, Total from Guest natural join PAYS natural join Bill where Last_Name like ? or First_Name like ? or Bill_ID like ?") or die(mysqli_error($con))) {
                $searchString = '%' . $_GET['Guest'] . '%';
                $stmt->bind_param('sss', $searchString, $searchString, $searchString);
                $stmt->execute();
                $stmt->bind_result($id, $lname, $fname, $amt);
                echo "<table class=gridtable border=1><th>Bill No</th><th>Last Name</th><th>First Name</th><th>Amount</th>\n";
                while($stmt->fetch()) {
                        echo "<tr><td>$id</td><td>$lname</td><td>$fname</td><td>$amt</td></tr>";
                }
                echo "</table>";

                $stmt->close();
        }



        $con->close();
        

        
        
?>