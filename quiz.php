<?php
session_start();

	if(isset($_POST['submit'])){
	header('Location:Questions.php');
	}
	if(isset($_POST['submit1'])){
	header('Location:index.php');
	}
?>
<html>
<head>
<title></title>
<link rel="stylesheet" type="text/css" href="quiz1.css">
</head>
<body>

<div class="login_box">
	<h1>Welcome to Quiz!</h1>
	
	<form action="quiz.php" method="post">
	<input class="btn" type="submit" name="submit" value="Start">
	&nbsp;
	&nbsp;
	<input class="btn" type="submit" name="submit1" value="LOGOUT">
	</form>
	
	</div>

</body>
</html>