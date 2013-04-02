<?php

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
        $result = mysqli_query($this->con, "SELECT id_country FROM " . $this->table . " where valid = 1 AND country = '" . $country . "'");
        $res = mysqli_fetch_row($result);
        return ($res[0]);
    }

    public function getNationality($id_country) {
        $sql = "SELECT * FROM " . $this->table . " where id_country = " . $id_country;
        $result = mysqli_query($this->con, $sql);
        $res = mysqli_fetch_row($result);

        return ($res[1]);
    }

}