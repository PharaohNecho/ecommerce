<?php
session_start();


$con = mysqli_connect('localhost', 'root', '', 'meta');

$username = $_POST['username'];
$password = $_POST['password'];

$s = "select * from mytable where username = '$username' && password = '$password'";
$result = mysqli_query($con, $s);
$num = mysqli_num_rows($result);

if($num == 1){
    $_SESSION['username'] = $username;
    header('Location: index.php');
    
}else{
    header('location: login.php');
}


?>