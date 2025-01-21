<?php require_once './Includes/header.php' ?>
	<title>Register</title>
	<script src="script.js"></script>
	
	<link rel="stylesheet" href="./custom/css/registerStyle.css">
</head>
<body>
	<br>
	<br>
	<br>
	<br>
	<br>
	<div class="container">
		<form method="post" action="register.php" onsubmit="return validateForm()">
			<h1>Register</h1>
			<label for="username">Username:</label>
			<input type="text" name="username" id="username" required>
			<span id="usernameError" class="error"></span>
			<label for="email">Email:</label>
			<input type="email" name="email" id="email" required>
			<span id="emailError" class="error"></span>
			<label for="password">Password:</label>
			<input type="password" name="password" id="password" required>
			<span id="passwordError" class="error"></span>
			<label for="confirm_password">Confirm Password:</label>
			<input type="password" name="confirm_password" id="confirm_password" required>
			<span id="confirmPasswordError" class="error"></span>
			<button type="submit">Register</button>
		</form>
	</div>
</body>

<style>
    * {
	margin: 0;
	padding: 0;
	box-sizing: border-box;
}

body {
	font-family: sans-serif;
	background-color: #f2f2f2;
}

.container {
	max-width: 500px;
	margin: 0 auto;
	background-color: #fff;
	padding: 20px;
	border-radius: 5px;
	box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
}

h1 {
	text-align: center;
	margin-bottom: 20px;
}

label {
	display: block;
	margin-bottom: 5px;
}

input {
	display: block;
	width: 100%;
	padding: 10px;
	border-radius: 5px;
	border: none;
	margin-bottom: 20px;
}

button {
	display: block;
	margin: 0 auto;
	padding: 10px 20px;
	background-color: #00bcd4;
	color: #fff;
	border: none;
	border-radius: 5px;
	cursor: pointer;
	transition: all 0.3s ease;
}

button:hover {
	background-color: #0097a7;
}

.error {
	display: none;
	color: red;
	margin-bottom: 5px;
}

 </style>

 <script>

    function validateForm() {
	var username = document.getElementById("username").value;
	var email = document.getElementById("email").value;
	var password = document.getElementById("password").value;
	var confirmPassword = document.getElementById("confirm_password").value;
	var usernameError = document.getElementById("usernameError");
	var emailError = document.getElementById("emailError");
	var passwordError = document.getElementById("passwordError");
	var confirmPasswordError = document.getElementById("confirmPasswordError");

	var hasError = false;

	// Validate username
	if (username === "") {
		usernameError.innerHTML = "Username is required";
		usernameError.style.display = "block";
		hasError = true;
	} else {
		usernameError.style.display = "none";
	}

	// Validate email
	if (email === "") {
		emailError.innerHTML = "Email is required";
		emailError.style.display = "block";
		hasError = true;
	} else if (!validateEmail(email)) {
		emailError.innerHTML = "Invalid email format";
		emailError.style.display = "block";
		hasError = true;
	} else {
		emailError.style.display = "none";
	}

	// Validate password
	if (password === "") {
		passwordError.innerHTML = "Password is required";
		passwordError.style.display = "block";
		hasError = true;
	} else if (password.length < 8) {
		passwordError.innerHTML = "Password should be at least 8 characters long";
		passwordError.style.display = "block";
		hasError = true;
	} else {
		passwordError.style.display = "none";
	}

	// Validate confirm password
	if (confirmPassword === "") {
		confirmPasswordError.innerHTML = "Confirm password is required";
		confirmPasswordError.style.display = "block";
		hasError = true;
	} else if (password !== confirmPassword) {
		confirmPasswordError.innerHTML = "Passwords do not match";
		confirmPasswordError.style.display = "block";
		hasError = true;
	} else {
		confirmPasswordError.style.display = "none";
	}

	return !hasError;
}

function validateEmail(email) {
	var re = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
	return re.test(email);
}

</script>
</html>

