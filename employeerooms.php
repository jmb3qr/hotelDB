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


        $view = '%' . $_GET['Hotel'] . '%';
        if($view=="%beach%"){
            $sql="select * from Hotel natural join Rooms where Hotel_ID = 1";
            $result=mysqli_query($con,$sql) or die('Error: ' . mysqli_error($con));
            echo"<h3>Rooms</h3>";
            echo "<table class=gridtable border=1><th>Hotel</th><th>Room Number</th><th>Type</th><th>Available</th>\n";
            while($row = $result->fetch_assoc()){
                $name = $row['Hotel_Name'];
                $num = $row['Room_Number'];
                $type = $row['Type'];
                $vac = $row['Vacant'];
		if($vac == "1"){
			$vac="yes";
		}
                if($vac == "0"){
			$vac="no";
		}
		echo "<tr><td>$name</td><td>$num</td><td>$type</td><td>$vac</td></tr>";
            

        }
            echo "</table>";
        }
        if($view=="%casino%"){
            $sql="select * from Hotel natural join Rooms where Hotel_ID = 2";
            $result=mysqli_query($con,$sql) or die('Error: ' . mysqli_error($con));
            echo"<h3>Rooms</h3>";
            echo "<table class=gridtable border=1><th>Hotel</th><th>Room Number</th><th>Type</th><th>Available</th>\n";
            while($row = $result->fetch_assoc()){
                $name = $row['Hotel_Name'];
                $num = $row['Room_Number'];
                $type = $row['Type'];
                $vac = $row['Vacant'];
		if($vac == "1"){
			$vac="yes";
		}
                if($vac == "0"){
			$vac="no";
		}
                echo "<tr><td>$name</td><td>$num</td><td>$type</td><td>$vac</td></tr>";
            

        }
            echo "</table>";
        }
        if($view=="%palms%"){
            $sql="select * from Hotel natural join Rooms where Hotel_ID = 3";
            $result=mysqli_query($con,$sql) or die('Error: ' . mysqli_error($con));
            echo"<h3>Rooms</h3>";
            echo "<table class=gridtable border=1><th>Hotel</th><th>Room Number</th><th>Type</th><th>Available</th>\n";
            while($row = $result->fetch_assoc()){
                $name = $row['Hotel_Name'];
                $num = $row['Room_Number'];
                $type = $row['Type'];
                $vac = $row['Vacant'];
		if($vac == "1"){
			$vac="yes";
		}
                if($vac == "0"){
			$vac="no";
		}
                echo "<tr><td>$name</td><td>$num</td><td>$type</td><td>$vac</td></tr>";
            

        }
            echo "</table>";
        }
        if($view=="%court%"){
            $sql="select * from Hotel natural join Rooms where Hotel_ID = 4";
            $result=mysqli_query($con,$sql) or die('Error: ' . mysqli_error($con));
            echo"<h3>Rooms</h3>";
            echo "<table class=gridtable border=1><th>Hotel</th><th>Room Number</th><th>Type</th><th>Available</th>\n";
            while($row = $result->fetch_assoc()){
                $name = $row['Hotel_Name'];
                $num = $row['Room_Number'];
                $type = $row['Type'];
                $vac = $row['Vacant'];
		if($vac == "1"){
			$vac="yes";
		}
                if($vac == "0"){
			$vac="no";
		}
                echo "<tr><td>$name</td><td>$num</td><td>$type</td><td>$vac</td></tr>";
            

        }
            echo "</table>";
        }
        if($view=="%sleep%"){
            $sql="select * from Hotel natural join Rooms where Hotel_ID = 5";
            $result=mysqli_query($con,$sql) or die('Error: ' . mysqli_error($con));
            echo"<h3>Rooms</h3>";
            echo "<table class=gridtable border=1><th>Hotel</th><th>Room Number</th><th>Type</th><th>Available</th>\n";
            while($row = $result->fetch_assoc()){
                $name = $row['Hotel_Name'];
                $num = $row['Room_Number'];
                $type = $row['Type'];
                $vac = $row['Vacant'];
		if($vac == "1"){
			$vac="yes";
		}
                if($vac == "0"){
			$vac="no";
		}
                echo "<tr><td>$name</td><td>$num</td><td>$type</td><td>$vac</td></tr>";
            

        }
            echo "</table>";
        }
        if($view=="%house%"){
            $sql="select * from Hotel natural join Rooms where Hotel_ID = 6";
            $result=mysqli_query($con,$sql) or die('Error: ' . mysqli_error($con));
            echo"<h3>Rooms</h3>";
            echo "<table class=gridtable border=1><th>Hotel</th><th>Room Number</th><th>Type</th><th>Available</th>\n";
            while($row = $result->fetch_assoc()){
                $name = $row['Hotel_Name'];
                $num = $row['Room_Number'];
                $type = $row['Type'];
                $vac = $row['Vacant'];
		if($vac == "1"){
			$vac="yes";
		}
                if($vac == "0"){
			$vac="no";
		}
                echo "<tr><td>$name</td><td>$num</td><td>$type</td><td>$vac</td></tr>";
            

        }
            echo "</table>";
        }
   
     

        $con->close();

        
?>