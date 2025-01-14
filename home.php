<?php
$servername = "localhost"; // Or "127.0.0.1"
$username = "root"; // Default XAMPP username
$password = ""; // Default XAMPP password
$dbname = "project2";

// Create connection
$conn = new mysqli("localhost",  " root", "", "project2");

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// Example: Basic query
$sql = "SELECT * FROM items";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // Output data of each row
  while($row = $result->fetch_assoc()) {
    echo "ID: " . $row["item_id"]. " - Name: " . $row["item_name"]. "<br>";
  }
} else {
  echo "0 results";
}

$conn->close();
?>