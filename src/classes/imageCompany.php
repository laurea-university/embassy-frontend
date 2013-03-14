<?php

class ImageCompany {

    private $table = "images_company";
    private $con;

    function ImageCompany($connexion) {
        $this->con = $connexion;
    }

    public function getImageByIdCompany($id) {
        $result = mysqli_query($this->con, "SELECT addr_image FROM " . $this->table . " where id_company = " . $id);
        $res = mysqli_fetch_row($result);
        return ($res[0]);
    }

}