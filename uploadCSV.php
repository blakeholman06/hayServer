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

$sql = "INSERT INTO deliveryinfo (lastname, firstname, balesordered, streetNumber, streetName, city, state, zip) VALUES ('$lastName', '$firstName', $balesOrdered, $streetNumber, '$streetName', '$city', '$state', '$zip')"; 

if (mysqli_query($conn, $sql)) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
} 
//to make a save where everything is ok

mysqli_close($conn);


?> 