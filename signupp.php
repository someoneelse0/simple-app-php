<?php
        $username=trim(stripslashes(htmlspecialchars(addslashes($_POST["username"]))));
        $passkey=trim(stripslashes(htmlspecialchars(addslashes($_POST["passkey"]))));
	$k=crypt($passkey,'$6$rounds=8192$t0u1w2x3y4z5$');
	$k1=crypt($k,'$6$rounds=8192$t0u1w2x3y4z5$');
        try{
                $c=new PDO("mysql:host=127.0.0.1;dbname=db0","root","123456");
                $c->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
                $s="INSERT INTO users VALUES('$username','$k1');";
                if($c->exec($s)){
                        setcookie("user",$username);
                        header("location:index.php");
                }else{
                        echo "Error";
                }
        }catch(PDOException $e){
                echo $e->getMessage();
        }finally{
                $c=null;
        }
?>
