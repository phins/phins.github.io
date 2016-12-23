<html>
<body>

Thanks for visiting!<br>

<?php

$servername = "setapproject.org";
$username = "csc412";
$password = "csc412";
$dbname = "csc412";

// Create connection
$con = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "INSERT INTO  `csc412`.`phinsquotes` (
`Quote` ,
`By`
)
VALUES ( . " $_POST["name"] );


if ($con->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
echo $_POST["name"]; 
?>
<br><br>
Here are other people's Quotes:<br><br>

<?php

$result = mysqli_query($con,"SELECT * FROM phinsquotes");

while ($row = mysqli_fetch_array($result)) {
    echo $row['Quote'] . " <br>By: " . $row['By'] . "<br>";
    echo "<br>";
}
$con->close();
?>
</body>
</html>
