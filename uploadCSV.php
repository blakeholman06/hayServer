<?php
$servername = "localhost";
$username = "root";
$password = "hay";
$dbname = "hayBaleData";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO deliveryInfo (lastName, firstName, streetNumber, streetName, city, state, zip,)
VALUES ('$_POST[lastName]', '$_POST[firstName]', '$_POST[streetNumber]', '$_POST[streetName]', '$_POST[city]', '$_POST[state]', '$_POST[zip]')";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>