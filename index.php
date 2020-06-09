<html>

	<head>

		<title>
			log form design
		</title>
			<link rel="stylesheet" type="text/css" href="style.css">
	
	</head>
	<?php require'valid.php' ?>			
			<body>
				<div class="loginbox">
				<img src="avatar.png" class="avatar">
				<center><h1>Login Here</h1></center>
				
				<h2></h2>
				<form action="index.php" method="post">
				
					<p>Username</p>
					<input type="text" name="username" placeholder="Enter Username">
					<p>Password</p>
					<input type="Password" name="password" placeholder="Enter Password">
					<input type="submit" name="submit" value="Login">
					<a href="index1.php">Don't have an account?</a>
				
				</form>
				</div>
			
			</body>

</html>
