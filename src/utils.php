<?php
/*
 * utils.php for embassy
 * by lenormf
 */

function getVar($in, $predicate, $default) {
	return $predicate === true ? $default : $in;
}

function getNonEmptyVar($in, $default) {
	return getVar($in, empty($in), $default);
}
