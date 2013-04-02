<?php

class Company{
    
    private $table = "company";
    
    private $con ;
    private $table_id;
    
   function Company($connexion){
        $this->con = $connexion;        
        $this->table_id = array();
}

    
    public function getAllCompany()
    {

        $result = mysqli_query($this->con, "SELECT * FROM ".$this->table." where valid = 1");
        return ($result);        
    }
            
}