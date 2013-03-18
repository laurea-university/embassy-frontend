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

function hasAccess() {
    if (isset($_SESSION[SESSION_PREFIX . 'id'])) {
        if ($_SESSION[SESSION_PREFIX . 'admin'] == 0)
            header("Location: index.php");
    }
    else
        header("Location: index.php");
}

function getLinkPage($page) {
    return ("index.php?page=" . $page . ".php");
}

function connexion() {
    $con = mysqli_connect("localhost", "root", "", "embassy");
    // Check connection
    if (mysqli_connect_errno()) {
        echo "Failed to connect to MySQL: " . mysqli_connect_error();
    }
    return ($con);
}

function deconexion($con) {
    mysqli_close($con);
}