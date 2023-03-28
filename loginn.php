<?php
        $username=trim(stripslashes(htmlspecialchars(addslashes($_POST["username"]))));
        $passkey=trim(stripslashes(htmlspecialchars(addslashes($_POST["passkey"]))));
	$k=crypt($passkey,'$6$rounds=8192$t0u1w2x3y4z5$');
        try{
                $c=new PDO("mysql:host=localhost;dbname=db0","root","123456");
                $c->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
                $s="SELECT username,passkey FROM users WHERE username='$username';";
                $cc=$c->prepare($s);
                $cc->execute();
                $n=1;
                while($r=$cc->fetch(PDO::FETCH_NUM)){
			password_verify($k,$r[1])?$n=0:$n=1;
		}
                if($n==0){
                        setcookie("user",$username);
                        header("location:index.php");
                }else if($n==1){
                        header("location:login.php");
                }else{
                        echo "Error";
		}
        }catch(PDOException $e){
                echo $e->getMessage();
        }finally{
                $c=null;
        }
?>
