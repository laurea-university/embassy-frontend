<?php
include("db.php");
//include ("verification.php");

if($_POST["regUsrname"] && $_POST["regEmail"] && $_POST["regPwd"] && $_POST["regVerif"])
{
	$user = $_POST["regUsrname"];
	$mail = $_POST["regEmail"];
	$passwd = $_POST["regPwd"];
	if (VerifyLogin($user, $db) == TRUE && VerifyMail($mail, $db) == TRUE)
	{

		 if($passwd==$_POST["regVerif"])
			{
			$res = $db->prepare("insert into user (login,mail,passwd) values (:login, :mail, :passwd)");
			$res->execute(array('login'=>$user,
								'mail'=>$mail,
								'passwd'=>SHA1($passwd)));
														
			print "<h1>you have registered sucessfully, a mail will be send into your mailbox.</h1>";
			//mail($mail, "Welcome to DbEmbassy", "Hi dear $user,\n Welcome to our website, and feel free to visit us regularly to see our new companies which have registred.\n Your password is $passwd");
			//print "<a href='index.php'>go to the login page</a>";
			print "vous aller etre rediriger vers la page de login";
			header("Refresh: 5;URL=index.php");
			}
		else
		 print "passwords doesnt match";
	}
	else
		print "login, email or company name already used";
}
else 
	print"invalid data";


function verifyLogin($login, $db){
	$verif_user = $db->prepare("SELECT id FROM user WHERE login = :login");
	$verif_user->execute(array('login'=>$login));
	$ret = $verif_user->fetchAll(PDO::FETCH_ASSOC);
	if ($ret != NULL)
		return FALSE;
	return TRUE;
}

function verifyMail($mail, $db){
	$verif_Mail = $db->prepare("SELECT id FROM user WHERE mail = :mail");
	$verif_Mail->execute(array('mail'=>$mail));
	$ret = $verif_Mail->fetchAll(PDO::FETCH_ASSOC);
	if ($ret != NULL)
		return FALSE;
	return TRUE;
}

?>