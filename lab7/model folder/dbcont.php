<?php
// Database connection
$servername = "localhost";
$username = "tasnim_13"; // Your MySQL username
$password = "1234"; // Your MySQL password
$dbname = "product_db";
 
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
 
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
 
// Prepare data for insertion
$name = $_POST['name'];
$Buying_Price = $_POST['Buying_Price'];
$price = $_POST['price'];
 
// Insert data into database
$sql = "INSERT INTO products (name, $Buying_Price, price) VALUES ('$name', '$Buying_Price', '$price')";
 
if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}
 
// Close connection
$conn->close();
?>
has context menu
