<?php
$servername = "localhost";
$username = "newuser";
$password = "root";
$dbname = "spotitube";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT  FROM albums";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo $row();
    }
} else {
    echo "0 results";
}
$conn->close();
?>