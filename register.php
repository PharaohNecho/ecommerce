<?php
session_start();
header('Location: login.php');

$con = mysqli_connect('localhost', 'root', '', 'meta');

$username = $_POST['username'];
$contact = $_POST['contact'];
$email = $_POST['email'];
$password = $_POST['password'];
$check_box = $_POST['check_box'];

$s = "select * from mytable where username = '$username'";
$result = mysqli_query($con, $s);
$num = mysqli_num_rows($result);

if($num == 1){
    echo "User already taken";
}else{
    $reg = "insert into mytable(username, contact, email, password, check_box) values('$username', '$contact', '$email', '$password', '$check_box')";
    mysqli_query($con, $reg);
    echo "Registration Successful";
}


?>