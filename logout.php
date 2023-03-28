<?php
        $_COOKIE["user"]?:header("location:login.php");
        setcookie("user","",time()-3600);
        header("location:login.php");
?>
