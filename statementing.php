<?php
// Database connection details
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "stock_management";

// Create a new connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Update the 'statement' table
$updateStatementSQL = "UPDATE statement 
                      SET initialstock = (SELECT SUM(quantity) FROM stock WHERE statement.name = stock.name),
                          salesmade = (SELECT SUM(quantity) FROM sales WHERE statement.name = sales.name),
                          finalstock = (SELECT SUM(quantity) FROM stock WHERE statement.name = stock.name) - (SELECT SUM(quantity) FROM sales WHERE statement.name = sales.name),
                          initialvalue = (SELECT cost FROM stock WHERE statement.name = stock.name),
                          salesvalue = (SELECT SUM(price) FROM sales WHERE statement.name = sales.name),
                          profitorloss = (SELECT SUM(price) FROM sales WHERE statement.name = sales.name) - (SELECT cost FROM stock WHERE statement.name = stock.name)";

if ($conn->query($updateStatementSQL) === TRUE) {
    echo "Statement table updated successfully.";
} else {
    echo "Error updating statement table: " . $conn->error;
}

// Close the database connection
$conn->close();
?>
