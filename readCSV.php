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

$sql = "SELECT `lastName`, `firstName`, `balesOrdered`, `streetNumber`, `streetName`, `city`, `state`, `zip`, `id` FROM `deliveryinfo`";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0)  {
  //handle output
  while($row = mysqli_fetch_assoc($result))   {
    echo "lastName: " . $row["lastName" ];
  }
} else {
  echo "no records found womp womp";
}


// save state where read works 

