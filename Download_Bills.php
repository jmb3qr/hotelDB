 <?php 

// output headers so that the file is downloaded rather than displayed
header('Content-Type: text/csv; charset=utf-8');
header('Content-Disposition: attachment; filename=data.csv');

// create a file pointer connected to the output stream
$output = fopen('php://output', 'w');

// output the column headings
fputcsv($output, array('Bill_ID', 'Total', 'Discount', 'Type_Payment'));

// fetch the data

require_once('./library.php'); 
 $con = new mysqli($SERVER, $USERNAME, $PASSWORD, $DATABASE); 
 // Check connection 
 if (mysqli_connect_errno()) { 
 echo("Can't connect to MySQL Server. Error code: " . 
mysqli_connect_error()); 
 return null; 
 } 

$sql = "SELECT * FROM Bill";
$result=mysqli_query($con, $sql) or die('download ' . mysqli_error($con));

//$rows = mysql_query('SELECT * FROM Reservation');

// loop over the rows, outputting them
while ($row = $result -> fetch_assoc()) fputcsv($output, $row);

?> 
