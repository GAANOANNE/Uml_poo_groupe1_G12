<?php
 class EtudiantDao extends Manager
{

    public function __construct()
    {
        $this->tableName = "etudiants";
        $this->classname = "Etudiant";
    }

    public function add($obj)
    {
        return "add methode";
    }

    public function update($obj)
    {
    }
   
    public function search($tab)
    {
        $sql_add="";
        if($tab['profil']!=="")
        {
            if ($tab['matricule'] !== "")
            {
                $sql_add = "WHERE `matricule` LIKE '%" . $tab['matricule'] . "%' AND `profil`='" . $tab['profil'] . "'";
            }else
            {
                $sql_add= "WHERE `profil`='" . $tab['profil'] . "'";   
            }
        }
        $sql = "select * FROM $this->tableName  $sql_add";
        //$sql = " SELECT * FROM `chambres`";
           // $sql="select * FROM $this->tableName ORDER BY `numero` DESC LIMIT $limit OFFSET $offset ";
        return $this->executeSelect($sql);
    }


}