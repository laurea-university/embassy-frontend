<?php

/*	Antoine Basset antoine.basset@epitech.eu
**
**	Identification script
**
**	Check if the session is on, if not check if recived information for identification then proceed.
**
*/

include('db.php');

if (isset($_SESSION[SESSION_PREFIX.'id']))
	unset($_SESSION[SESSION_PREFIX.'id'], $_SESSION[SESSION_PREFIX.'mail'], $_SESSION[SESSION_PREFIX.'admin'], $_SESSION[SESSION_PREFIX.'login']);

header("Location: index.php");