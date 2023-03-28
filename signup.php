<!DOCTYPE html>
<?php
        !$_COOKIE["user"]?:header("location:index.php");
?>
<html>
        <head>
                <meta charset="utf-8" />
                <meta name="viewport" content="width=device-width,initial-scale=1.0" />
                <title>Sign up</title>
        </head>
        <body>
                <form action="signupp.php" method="post">
                        <fieldset>
                                <legend>SIGN UP</legend>
                                <label>Username:</label>
                                <input type="text" name="username" />
                                <br />
                                <label>Passkey:</label>
				<input type="password" name="passkey" />
				<br />
                                <button>Send</button>
                        </fieldset>
		</form>
		<p>Have an account? <a href="login.php">Click here</a></p>
        </body>
</html>
