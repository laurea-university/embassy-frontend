<?php
/*
 * db.php for embassy-frontend
 * by lenormf
 */
 
session_start();
define('SESSION_PREFIX', 'DB_EMBASSY_');
define('DB_HOST', 'localhost');
define('DB_NAME', 'embassy');
define('DB_USER', 'root');
define('DB_PASSWD', 'mysql.root');

try {
	$db = new PDO('mysql:host='.DB_HOST.';dbname='.DB_NAME, DB_USER, '');
}
catch (PDOException $e) {
	die('Database error: ' . $e->getMessage());
}

$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

$db_query = array();
try {
	$db_query['get_companies'] = $db->prepare('SELECT * FROM `company`');
	$db_query['get_companies_by_name'] = $db->prepare('SELECT * FROM `company` WHERE `name` LIKE ?');
	$db_query['get_tags'] = $db->prepare('SELECT `tags` FROM `company`');
}
catch (PDOException $e) {
	die('Unable to prepare request: ' . $e->getMessage());
}
