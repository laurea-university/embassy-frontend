<?php


class Category{
    
    private $table = "category";
    private $tablelink = "link_cat_comp";
    private $con ;
    
   function Category($connexion){
        $this->con = $connexion;
}
    
    public function getAllCategory()
    {
        $result = mysqli_query($this->con, "SELECT * FROM ".$this->table." where valid = 1");
        return ($result);        
    }
    
    public function getSectorActivity($id_company)
    {
        $sql = "SELECT * FROM ".$this->table." left join ".$this->tablelink." as lcc on lcc.id_category = ".$this->table.".id_category";
        $sql .= " where ".$this->table.".valid = 1 AND lcc.id_company = ".$id_company;
        $result = mysqli_query($this->con, $sql);
        $row = mysqli_fetch_array($result);
        return ($row["name"]);
    }
    
}