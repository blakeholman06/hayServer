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

$sql = "SELECT lastName, firstName, balesOrdered, streetNumber, streetName, city, state, zip FROM 'delivery info'";
$result = mysqli_query($conn, $sql);
if (mysqli_num_rows($result) > 0)  {
  while ($row = mysqli_fetch_assoc($result)) {
  echo "lastName: ". $row["lastName"] . "<br>";
  echo "firstName: ". $row["firstName"] . "<br>";
  echo "balesordered: ". $row["balesordered"] . "<br>";
  echo "streetNumber: ". $row["streetNumber"] . "<br>";
  echo "streetName: ". $row["streetName"] . "<br>";
  echo "city: ". $row["city"] . "<br>";
  echo "state: ". $row["state"] . "<br>"; 
  echo "zip: ". $row["zip"] . "<br>";
  }
} else {
  echo "0 results";
} 
echo : $row["lastName"] . "<br>";
mysqli_close($conn);


?> 