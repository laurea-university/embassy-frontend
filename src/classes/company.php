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
    
    private function updateList($id_category, $check)
    {
        $condition = "";
        if (is_numeric($id_category) == true && $id_category != "" && $id_category != null)
        {
            $this->table_id[] = $check;
        }
        
        
        $i = 0;
        if (count($this->table_id) == 0)
            return ($condition);
        
        foreach ($this->table_id as $key => $value)
        {
            if ($value == true)
            {
                $condition .= " lcc.id_category=".$key;
                if ($i== 0 && count($this->table_id) > 1){
                    $condition .= " OR";
                }
                    
            }
            
            $i++;
        }
        return ($condition);
    }
    
        public function getCompanyById($id_country, $where, $check)
    {
            
           $condition = $this->updateList($where, $check);
            $sql = "SELECT ".$this->table.".* FROM ".$this->table;
            if ($condition != "")
                $sql .= " left join link_cat_comp as lcc on lcc.id_company = ".$this->table.".id";
            $sql .=  " where ".$this->table.".valid = 1 AND ".$this->table.".location = ".$id_country;
            if ($condition)
                $sql .= " AND ".$condition;
        $resultat = mysqli_query($this->con, $sql);
        return ($resultat);        
    }
        
}