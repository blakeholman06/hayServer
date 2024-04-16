<?php
$servername = "localhost";
$username = "root";
$password = "hay";
$dbname = "hayBaleData";
// Create connection obj
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if(!$conn) {
die("connection failed, womp womp" . mysqli_connect_error());
}
$lastName = "Radaker";
$firstName = "Joe";
$balesOrdered = 3;
$streetNumber = 123;
$streetName = "Main St";
$city = "Anytown";
$state = "CA";
$zip = "12345";

$sql = "DELETE FROM 'deliveryinfo' WHERE id = 2";

if (mysqli_query($conn, $sql)) {
  echo "Record deleted successfully";
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
} 
//to make a save where everything is ok for delete 

mysqli_close($conn);


?> 