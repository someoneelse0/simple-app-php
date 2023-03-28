<!DOCTYPE html>
<?php
	!$_COOKIE["user"]?:header("location:index.php");
?>
<html>
	<head>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width,initial-scale=1.0" />
		<title>Log in</title>
	</head>
	<body>
		<form action="loginn.php" method="post">
			<fieldset>
				<legend>LOG IN</legend>
				<label>Username:</label>
				<input type="text" name="username" />
				<br />
				<label>Passkey:</label>
				<input type="password" name="passkey" />
				<br />
				<button>Send</button>
			</fieldset>
		</form>
		<p>Don't have an account? <a href="signup.php">Click here</a></p>
	</body>
</html>
