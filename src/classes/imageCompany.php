<?php

class ImageCompany {

    private $table = "images_company";
    private $con;

    function ImageCompany($connexion) {
        $this->con = $connexion;
    }

    public function getImageByIdCompany($id) {
        $result = mysqli_query($this->con, "SELECT * FROM " . $this->table . " where id_company = " . $id);
        return ($result);
        }
}