<?php

// Database connection
$servername = "localhost";
$username = "admin";
$password = "Afpa1234";
$dbname = "the_district_base";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Fetch data from the database
$sql = "SELECT * FROM plat";
$result = $conn->query($sql);

$plats = [];

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        $plats[] = $row;
    }
    
} else {
    echo "0 results";
}

// Close the database connection
$conn->close();

// Output the data as JSON
echo json_encode(['plat' => $plats]);

?>