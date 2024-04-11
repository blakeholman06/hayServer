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

$sql = "SELECT `lastName`, `firstName`, `balesOrdered`, `streetNumber`, `streetName`, `city`, `state`, `zip`, `id` FROM `deliveryinfo` WHERE 0";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  echo "Records found in database<br>";
  echo "<table border='1'>";
} else {
  echo "No records found in database";
}
       
?>