<?php
$con = mysqli_connect('localhost','root','','facebook');
$phoneoremail = $_POST['phoneoremail'];
$password = $_POST['password'];

$check_data = mysqli_query($con,"DELETE FROM userdata SET password = '$password' and phoneoremail = '$phoneoremail'");

if($check > 0){
header("Location:http:// 192.168.167.155/FacebookLogin/mainpage.html");
}
?