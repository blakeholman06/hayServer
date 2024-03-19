<?php
$servername = "localhost";
$username = "root";
$password = "hay";
$dbname = "hayBaleData"
// Create connection obj
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if(!$conn) {
die("connection failed, womp womp " . mysqli_connect_error());
}

$sql = "SELECT lastName, firstName, balesOrdered, streetNumber, streetName, city, state, zip FROM deliveryinfo";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0)  {
  //handle output
  while($row = mysqli_fetch_assoc($result))  {
    echo "lastName: " . $row["lastName"];
  }
} else {
  echo "no records dound womp womp";
}
myqli_close($conn);




?> 