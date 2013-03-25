<?php


class Company{
    
    private $table = "company";
    private $con ;
    
   function Company($connexion){
        $this->con = $connexion;
}
    
    public function getAllCompany()
    {

        $result = mysqli_query($this->con, "SELECT * FROM ".$this->table." where valid = 1");
        return ($result);        
    }
    
        public function getCompanyById($id_country, $where)
    {
        $resultat = mysqli_query($this->con, "SELECT * FROM ".$this->table." where valid = 1 AND location = ".$id_country);
        return ($resultat);        
    }
        
}