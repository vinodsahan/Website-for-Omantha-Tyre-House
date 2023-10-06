<?php require_once './Includes/header.php' ?>
<br>
<br>
<body>
	<div class="container">
		<h1>Login</h1>
	
		<form method="POST" action="" id="login-form">
		<br>
		<br>

			<label for="username">Username</label>
			<input type="text" name="username" id="username" required>
			<label for="password">Password</label>
			<input type="password" name="password" id="password" required>
			<input type="submit" name="login" value="Login">
			<p class="message">Not Registered? <a href="register.php">Create an account</a></p>
			 <a href="/new/avms/logout.php">Log as admin</a>
		</form>
	</div>
	
</body>

<?php require_once './Includes/footer.php' ?>