<?php
// Database connection settings
$host = "localhost";
$username = "root";
$password = "";
$database = "stock_management";

// Create a connection
$conn = new mysqli($host, $username, $password, $database);

// Check the connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Update the statement table
$sql = "UPDATE statement
        SET initialstock = (SELECT stock.quantity FROM stock WHERE statement.name = stock.name),
            salesmade = (SELECT SUM(sales.quantity) FROM sales WHERE statement.name = sales.name),
            finalstock = (SELECT stock.quantity FROM stock WHERE statement.name = stock.name) - (SELECT SUM(sales.quantity) FROM sales WHERE statement.name = sales.name),
            initialvalue = (SELECT stock.cost FROM stock WHERE statement.name = stock.name),
            salesvalue = (SELECT SUM(sales.price) FROM sales WHERE statement.name = sales.name),
            profitorloss = (SELECT stock.cost FROM stock WHERE statement.name = stock.name) - (SELECT SUM(sales.price) FROM sales WHERE statement.name = sales.name)";

// Execute the update query
if ($conn->query($sql) === TRUE) {
    echo "Statement table updated successfully.";
} else {
    echo "Error updating statement table: " . $conn->error;
}

// Close the connection
$conn->close();
?>
