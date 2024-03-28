<?php
$servername = "localhost";
$username = "root";
$password = "hay";
$dbname = "hayBaleData";
// Create connection obj
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if(!$conn) {
die("connection failed, womp womp " . mysqli_connect_error());
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

$sql = "UPDATE deliveryinfo (SET balesordered = balesordered + 100 AND lastName = 'Holman' WHERE lastName = 'Radaker'")

if (mysqli_query($conn, $sql)) {
  echo "Record updated successfully";
} else {
  echo "Error updating record: " . mysqli_error($conn);
}
mysqli_close($conn);


?> 