<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "header";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Fetch data
$sql = "SELECT header_title, header_subtitle, nav_item_1, nav_item_2, nav_item_3, nav_item_4 FROM navigation WHERE id=1"; // Adjust the WHERE clause as needed
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // Output data of each row
    $row = $result->fetch_assoc();
    echo json_encode($row);
} else {
    echo json_encode([]);
}

$conn->close();
?>