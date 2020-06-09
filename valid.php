<?php

session_start();

$con = mysqli_connect('localhost','root','');

mysqli_select_db($con,'registration');

if (isset($_POST['submit'])){
$username = $_POST['username'];
$passwrd = $_POST['password'];
$password=md5($passwrd);
$s = " select * from user where username = '$username' && password = '$password'";

$result = mysqli_query($con, $s);

$num = mysqli_num_rows($result);

if($num == 1){
	header('location:quiz.php');
	}else{
	header('location:index.php');
	}



}


?>