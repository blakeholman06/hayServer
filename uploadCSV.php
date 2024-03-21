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
$lastname = $_POST['lastname'];
$firstname = $_POST['firstname'];
$balesOrdered = $_POST['balesOrdered'];
$streetNumber = $_POST['streetNumber'];
$streetName = $_POST['streetName'];
$city = $_POST['city'];
$state = $_POST['state'];
$zip = $_POST['zip'];
INSERT INTO `deliveryinfo`(`lastName`, `firstName`, `balesOrdered`, `streetNumber`, `streetName`, `city`, `state`, `zip`) VALUES ('[value-1]','[value-2]','[value-3]','[value-4]','[value-5]','[value-6]','[value-7]','[value-8]')
$sql = "SELECT lastName, firstName, balesOrdered, streetNumber, streetName, city, state, zip FROM 'deliveryinfo';";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0)  {
  //handle output
  while($row = mysqli_fetch_assoc($result))  {
    echo "lastName: " . $row["lastName"];
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