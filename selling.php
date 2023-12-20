<?php
$name=$_POST['name'];
$description=$_POST['description'];
$cashier=$_POST['cashier'];
$size=$_POST['size'];
$color=$_POST['color'];
$quantity=$_POST['quantity'];
$price=$_POST['price'];
$con = mysqli_connect('localhost','root','','stock_management');
if(mysqli_connect_error()){
    die("Connection to database failed".mysqli_connect_errno());
}
else {
    $results = mysqli_query($con,"INSERT INTO sales(name,description,cashier,size,color,quantity,price)values('$name','$description','$cashier','$size', '$color','$quantity','$price')");
    if (!$results){
        echo("Error is " . mysqli_error($con));
    }
    else{echo 'Sale Added Successful';}
}
?>
