<!DOCTYPE html>
<?php
        $_COOKIE["user"]?:header("location:login.php");
?>
<html>
        <head>
                <meta charset="utf-8" />
                <meta name="viewport" content="width=device-width,initial-scale=1.0" />
                <title>Mailer Utility</title>
                <link rel="stylesheet" href="styles.css">
        </head>
        <body>
                <form method="post" action="mailer.php">
                        <fieldset>
                                <legend>Mailer Utility</legend>
                                <label>From:</label>
                                <input type="mail" name="fr" />
                                <br />
                                <br />
                                <label>To:</label>
                                <input type="mail" name="to" />
                                <br />
                                <br />
                                <label>Issue:</label>
                                <input type="text" name="is" />
                                <br />
                                <br />
                                <label>Message:</label>
                                <input type="text" name="me" />
                                <button>Send</button>
                        </fieldset>
                </form>
        </body>
</html>
