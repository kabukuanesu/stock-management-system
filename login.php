<?php
$con = mysqli_connect('localhost','root','','stock_management');
if (isset($_POST['login'])) {
    $username = $_POST["username"];
    $password = $_POST["password"];
    
    $sql = "select * from registration where name='$username' and password='$password'";
    $result = mysqli_query($con, $sql);
    $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
    $count = mysqli_num_rows($result);
    if ($count == 1) {
        header ("Location:dashboard.php");
    } else {
        echo '<script>
            window.location.href="home.php";
            alert("Invalid Username or Password!")
        </script>' ;
    }
}