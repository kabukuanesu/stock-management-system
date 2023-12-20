<?php
$name=$_POST['name'];
$email=$_POST['email'];
$phone=$_POST['phone'];
$dob=$_POST['dob'];
$password=$_POST['password'];
$con = mysqli_connect('localhost','root','','stock_management');
if(mysqli_connect_error()){
    die("Connection to database failed".mysqli_connect_errno());
}
else {
    $results = mysqli_query($con,"INSERT INTO registration(name,email,phone,dob,password)values('$name','$email','$phone','$dob', '$password')");
    if (!$results){
        echo("Error is " . mysqli_error($con));
    }
    else{header ("Location:successful.php");}
}
?>