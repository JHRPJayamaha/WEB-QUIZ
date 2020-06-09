<?php

session_start();

$con = mysqli_connect('localhost','root','');

mysqli_select_db($con,'registration');

if (isset($_POST['submit'])){
$fullname = $_POST['fullname'];
$username = $_POST['username'];
$email = $_POST['email'];
$passwrd = $_POST['password'];
$password=md5($passwrd);
$repasswrd = $_POST['repassword'];
$repassword=md5($repasswrd);
$s = " select * from user where username = '$username'";

$result = mysqli_query($con, $s);

$num = mysqli_num_rows($result);

if($num == 1){
	echo"Username Already Taken";
	}else{
	$reg= "insert into user(fullname,username,email,password,repassword) values ('$fullname','$username','$email','$password','repassword')";
	mysqli_query($con, $reg);
	//echo"Registration Successful";
	header('Location: index.php');
	}



}


?>