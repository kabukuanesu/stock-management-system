<?php
$name=$_POST['name'];
$description=$_POST['description'];
$vendor=$_POST['vendor'];
$size=$_POST['size'];
$color=$_POST['color'];
$quantity=$_POST['quantity'];
$cost=$_POST['cost'];
$con = mysqli_connect('localhost','root','','stock_management');
if(mysqli_connect_error()){
    die("Connection to database failed".mysqli_connect_errno());
}
else {
    $results = mysqli_query($con,"INSERT INTO stock(name,description,vendor,size,color,quantity,cost)values('$name','$description','$vendor','$size', '$color','$quantity','$cost')");
    $insertStatementSQL = "INSERT INTO statement (name) VALUES ('$name')";

    if ($con->query($insertStatementSQL) === TRUE) {
        echo "Statement table updated successfully.";
    } else {
        echo "Error updating statement table: " . $con->error;
    }
    if (!$results){
        echo("Error is " . mysqli_error($con));
    }
    else{echo 'Stock Added Successful';}
}
?>