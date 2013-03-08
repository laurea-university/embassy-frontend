<?php

/*	Antoine Basset antoine.basset@epitech.eu
**
**	Identification script
**
**	Check if the session is on, if not check if recived information for identification then proceed.
**
*/


include('db.php');
echo '<pre>';
print_r($_POST);
echo '</pre>';
	if (isset($_POST['mail'])&& isset($_POST['passwd']))
	{
		$login = mysql_real_escape_string($_POST['mail']);
		$pass = mysql_real_escape_string($_POST['passwd']);
		
		$res = $db->prepare('SELECT id, login, mail FROM user WHERE mail = :mail AND passwd = SHA1(:passwd)');
		$res->execute(array('mail' => $login,
							'passwd' => $pass));
		$ret = $res->fetchAll(PDO::FETCH_ASSOC);
		echo '<pre>';
		print_r($ret);
		echo '</pre>';
		if ($ret == NULL)
		{
			header("Location: login.php?error=caca");
			exit(0);
		}
		
		foreach ($ret[0] as $key =>$val)
			$_SESSION[SESSION_PREFIX.$key] = $val;
		header("Location: index.html");

	}
	else 
		header("Location: login.php?error=caca");		//redirection get avec message d'erreur
?>