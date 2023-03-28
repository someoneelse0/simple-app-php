<!DOCTYPE html>
<?php
	$_COOKIE["user"]?:header("location:login.php");
?>
<html>
        <head>
                <meta charset="utf-8" />
                <meta name="viewport" content="width=device-width,initial-scale=1.0" />
		<title>Config</title>
		<link rel="stylesheet" href="styles.css" />
        </head>
	<body>
		<h1>Config</h1>
		<noscript>If you don't enable two scripts, you can't see your location and other relevant information</noscript>
		<p class="config"><a href="logout.php">Log out</a></p>
		<p class="config"><a href="m.php">Mailer Utility</a></p>
		<p class="config"><a>Delete account permanently</a></p>
		<script>
			let a=document.getElementsByTagName("a")[2];
			a.addEventListener("click",e=>{
				location="delaccper.php?name="+document.cookie.split("=")[1];
			});
		</script>
        </body>
</html>
