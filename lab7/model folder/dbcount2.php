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
 
// Fetch products with display value "Yes"
$sql = "SELECT * FROM products WHERE display = 'Yes'";
$result = $conn->query($sql);
 
// Output HTML table
if ($result->num_rows > 0) {
    echo "<table border='1'>";
    echo "<tr><th>Name</th><th>Profit</th><th>Edit</th><th>Delete</th></tr>";
    // Output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<tr>";
        echo "<td>" . $row["name"] . "</td>";
        echo "<td>" . $row["profit"] . "</td>";
        echo "<td><a href='edit_product.php?id=" . $row["id"] . "'>Edit</a></td>";
        echo "<td><a href='delete_product.php?id=" . $row["id"] . "'>Delete</a></td>";
        echo "</tr>";
    }
    echo "</table>";
} else {
    echo "No products found.";
}
 
// Close connection
$conn->close();
?>