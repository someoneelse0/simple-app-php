<!DOCTYPE html>
<?php
	$_COOKIE["user"]?:header("location:login.php");
?>
<html>
	<head>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width,initial-scale=1.0" />
		<title>Index</title>
		<link rel="stylesheet" href="styles.css" />
		<script>document.cookie=`${document.cookie.split("=")[0]}=${document.cookie.split("=")[1]}`;</script>
	</head>
	</body>
		<header>
			<h1>Welcome</h1>
		</header>
		<ul class="o">
			<li><a href="http://localhost:3000/chat/">Chat</a></li>
			<li><a href="config.php">Configuration</a></a>
			<li><a href="m.php">Mailer Utility</a></li>
		</ul>
		<script>
			document.getElementsByTagName("a")[0].href="http://localhost:3000/chat/"+document.cookie.split("=")[1];
		</script>
	</body>
</html>
