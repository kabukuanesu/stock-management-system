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

// SQL query to retrieve data from a table
$sql = "SELECT * FROM sales";

// Execute the query
$result = $conn->query($sql);

// Check if any rows are returned
if ($result->num_rows > 0) {
    // Start HTML table
    echo "<table>";
    
    // Output table headers
    echo "<tr>";
    echo "<th>Date </th><th></th>";
    echo "<th>Name </th><th></th>";
    echo "<th>Description </th><th></th>";
    echo "<th>Size </th><th></th>";
    echo "<th>Color </th><th></th>";
    echo "<th>Quantity </th><th></th>";
    echo "<th>Price </th><th></th>";
    echo "<th>Cashier's Name </th><th></th>";
    echo "</tr>";
    
    // Loop through each row
    while ($row = $result->fetch_assoc()) {
        // Output table rows
        echo "<tr>";
        echo "<td>" . $row["time"] . "</td><td></td>";
        echo "<td>" . $row["name"] . "</td><td></td>";
        echo "<td>" . $row["description"] . "</td><td></td>";
        echo "<td>" . $row["size"] . "</td><td></td>";
        echo "<td>" . $row["color"] . "</td><td></td>";
        echo "<td>" . $row["quantity"] . "</td><td></td>";
        echo "<td>" . $row["price"] . "</td><td></td>";
        echo "<td>" . $row["cashier"] . "</td><td></td>";
        echo "</tr>";
    }
    
    // End HTML table
    echo "</table>";
} else {
    echo "No results found.";
}

// Close the connection
$conn->close();
?>
