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
$sql = "INSERT INTO deliveryinfo (lastName, firstName, balesOrdered, streetNumber, streetName, city, state, zip) VALUES ('$lastName', '$firstName', '$balesOrdered', '$streetNumber', '$streetName', '$city', '$state', '$zip')";
  
$sql = "SELECT lastName, firstName, balesOrdered, streetNumber, streetName, city, state, zip FROM 'deliveryinfo'";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0)  {
  //handle output
  while($row = mysqli_fetch_assoc($result))   {
    echo "lastName: " . $row["lastName" ];
    echo "firstName: " . $row["firstName"];
    echo "balesOrdered: " . $row["balesOrdered"];
    echo "streetNumber: " . $row["streetNumber"];
    echo "streetName: " . $row["streetName"];
    echo "city: " . $row["city"];
    echo "state: " . $row["state"];
    echo "zip: " . $row["zip"];

  }
} else {
  echo "no records found womp womp";
}

myqli_close($conn);




?> 