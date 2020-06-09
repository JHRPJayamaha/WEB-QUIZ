<head>
<?php require'connection.php' ?>

		<title>
			signup form design
		</title>
			<link rel="stylesheet" type="text/css" href="style1.css">
			<body>
				<div class="signupbox">
				<img src="avatar.png" class="avatar">
				<center><h1>Sign UP Now</h1></center>
				
				<h2></h2>
				<form action="index1.php" method="post">
					<p>Full Name</p>
					<input type="text" name="fullname" placeholder="Enter Full Name">
					<p>Username</p>
					<input type="text" name="username" placeholder="Enter Username">
					<p>Email</p>
					<input type="email" name="email" placeholder="Enter Email Address">
					<p>Password</p>
					<input type="Password" name="password" placeholder="Enter Password">
					<p>Re-Enter Password</p>
					<input type="Password" name="repassword" placeholder="Re-Enter Password">
					<input type="submit" name="submit" value="Sign up">
					<a href="index.php">Do you have an account?</a>
				
				</form>
				</div>
			
			</body>

	</head>