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


UPDATE deliveryinfo
SET lastName = 'Radaker'
SET firstName = 'Joseph'
SET balesOrdered = '1'
SET streetNumber = '123'
SET streetName = 'Main St'
SET city = 'San Diego'
SET state = 'CA'
SET zip = '92130'


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