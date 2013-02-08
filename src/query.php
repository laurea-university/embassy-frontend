<?php
/*
 * query.php for embassy-frontend
 * by lenormf
 */

require_once('db.php');
require_once('utils.php');

header('Content-Type: application/json');

class errorType {
	const LOGIC = 0;
	const INPUT = 1;
	const INTERNAL = 2;
}

function errorTypeToString($type) {
	switch ($type) {
		case errorType::LOGIC: return 'logic';
		case errorType::INPUT: return 'input';
		default: break;
	}

	return false;
}

function outputError($type, $msg) {
	return json_encode(array(
		'type' => errorTypeToString($type),
		'error' => $msg
	));
}

/* Command handlers */
function getCompaniesHandler($args) {
	$byName = in_array('byName', array_keys($args));

	global $db_query;
	if ($byName === true) {
		$q = $db_query['get_companies_by_name'];
		$q->bindValue(1, '%' . $args['byName'] . '%', PDO::PARAM_STR);
	} else {
		$q = $db_query['get_companies'];
	}

	$q->execute();
	$companies = $q->fetchAll(PDO::FETCH_OBJ);

	print json_encode($companies);
}

$commandHandlers = array(
	'getCompanies' => array(
		'handler' => 'getCompaniesHandler',
		'args' => array('byName')
	)
);

/* Entry point */
$command = getNonEmptyVar($_GET['cmd'], false);
$arguments = array();

foreach ($_GET as $a => $v) {
	if ($a === 'cmd')
		continue;

	$arguments[$a] = $v;
}

if ($command === false) {
	die(outputError(errorType::LOGIC, 'no command given'));
} else if (in_array($command, array_keys($commandHandlers)) === false) {
	die(outputError(errorType::INPUT, 'unknown command ' . $command));
}

foreach ($arguments as $a => $v) {
	foreach ($commandHandlers as $c) {
		if (in_array($a, $c['args']) === false) {
			die(outputError(errorType::INPUT, 'given argument ' . $a . ' is out of the command\'s context'));
		}
	}
}

try {
	$commandHandlers[$command]['handler']($arguments);
}
catch (PDOException $e) {
	die(outputError(errorType::INTERNAL, 'Unable to execute query: ' . $e->getMessage()));
}
