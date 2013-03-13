<?php


class Category{
    
    private $table = "category";
    private $con ;
    
   function Category($connexion){
        $this->con = $connexion;
}
    
    public function getAllCategory()
    {
        $result = mysqli_query($this->con, "SELECT * FROM ".$this->table." where valid = 1");
        return ($result);        
    }
    
}