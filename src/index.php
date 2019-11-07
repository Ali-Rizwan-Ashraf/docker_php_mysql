<?php
$conn = new mysqli("database", "root", "pwd", "my_db");
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM agents";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while ($row = $result->fetch_assoc()) {
        echo "<br> ID: ". $row["AGENT_CODE"]. "  " ."<br>Name: ". $row["AGENT_NAME"] ."<br>Area: ". $row["WORKING_AREA"] . "<br><br>";
    }
} else {
    echo "0 results";
}
$conn->close();
