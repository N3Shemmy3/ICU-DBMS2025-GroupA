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

// Get form data
$header_title = $_POST['header_title'];
$header_subtitle = $_POST['header_subtitle'];
$nav_item_1 = $_POST['nav_item_1'];
$nav_item_2 = $_POST['nav_item_2'];
$nav_item_3 = $_POST['nav_item_3'];
$nav_item_4 = $_POST['nav_item_4'];

// Update database
$sql = "UPDATE navigation SET 
    header_title='$header_title', 
    header_subtitle='$header_subtitle', 
    nav_item_1='$nav_item_1', 
    nav_item_2='$nav_item_2', 
    nav_item_3='$nav_item_3', 
    nav_item_4='$nav_item_4' 
    WHERE id=1"; // Adjust the WHERE clause as needed

if ($conn->query($sql) === TRUE) {
    echo "Record updated successfully";
 // Redirect to another page
    header("Location: index.html");
    exit();
} else {
    echo "Error updating record: " . $conn->error;
}

$conn->close();
?>