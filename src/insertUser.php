<?php
include 'db.php';

$cpt = 0;

while ($cpt != (count($_POST)) / 3)
{
	$username = htmlentities(mysql_real_escape_string($_POST['username'.$cpt]));
	$passwd = htmlentities(mysql_real_escape_string($_POST['password'.$cpt]));
	$mail = htmlentities(mysql_real_escape_string($_POST['mail'.$cpt]));
	$sql='INSERT INTO user (login, passwd, mail) VALUES("'.$username.'",SHA1("'.$passwd.'"),"'.$mail.'")';
	$res = $db->query($sql);
	$cpt += 1;
}
$res->closeCursor();
header("Location: userAdmin.php");
?>