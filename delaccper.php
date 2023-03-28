<?php
	$user=trim(stripslashes(htmlspecialchars(addslashes($_GET["name"]))));
        try{
                $c=new PDO("mysql:host=localhost;dbname=db0","root","123456");
                $c->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
		$s="DELETE FROM users WHERE username='$user';";
		$c->exec($s);
		echo "ALL YOUR DATA HAS BEEN DELETED FROM DATABASE";
		setcookie("user","",time()-3600);
        }catch(PDOException $e){
                echo $e->getMessage();
        }finally{
                $c=null;
	}
?>
