<?php
$servername = "localhost";
$username = "root";
$password = "tintin10";
$dbname = "mybuddy";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "SELECT name, age, FROM userdata";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "name: " . $row["name"]. " - Age: " . $row["age"]. "<br>";
    }
} else {
    echo "0 results";
}
$conn->close();
?>