<?php
 class ChambreDao extends Manager
 {

    public function __construct()
    {
        $this->tableName="chambres";
        $this->classname="Chambre";
    }

    public function add($obj)
    {
        $num_bat=intval($obj['numero_batiment']);
        $type=$obj['type'];
        $sql="INSERT INTO $this->tableName VALUES(DEFAULT,$num_bat,'$type')";
        return $this->executeUpdate($sql)!=0;
    }




 }