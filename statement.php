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
$sql = "SELECT * FROM statement";

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
    echo "<th>Initial Stock </th><th></th>";
    echo "<th>Sold Stock </th><th></th>";
    echo "<th>Final Stock </th><th></th>";
    echo "<th>Initial Value </th><th></th>";
    echo "<th>Sales Value </th><th></th>";
    echo "<th>Profit or Loss </th><th></th>";
    echo "</tr>";
    
    // Loop through each row
    while ($row = $result->fetch_assoc()) {
        // Output table rows
        echo "<tr>";
        echo "<td>" . $row["time"] . "</td><td></td>";
        echo "<td>" . $row["name"] . "</td><td></td>";
        echo "<td>" . $row["initialstock"] . "</td><td></td>";
        echo "<td>" . $row["salesmade"] . "</td><td></td>";
        echo "<td>" . $row["finalstock"] . "</td><td></td>";
        echo "<td>" . $row["initialvalue"] . "</td><td></td>";
        echo "<td>" . $row["salesvalue"] . "</td><td></td>";
        echo "<td>" . $row["profitorloss"] . "</td><td></td>";
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
