<?php

define('SLOVENIA', 'slovenia');
define('FINLAND', 'finland');

class Country {

    private $table = "country";
    private $con;

    function Country($connexion) {
        $this->con = $connexion;
    }

    public function getAllCountry() {
        $result = mysqli_query($this->con, "SELECT * FROM " . $this->table . " where valid = 1");
        return ($result);
    }

    public function getIdCountry($country) {
        $result = mysqli_query($this->con, "SELECT id_country FROM " . $this->table . " where valid = 1 AND country = '" . $country."'");
        $res = mysqli_fetch_row($result);
        return ($res[0]);
    }

}