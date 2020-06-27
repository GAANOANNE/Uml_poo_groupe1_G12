<?php
 class EtudiantDao extends Manager
 {

    public function __construct()
    {
        $this->tableName="etudiants";
        $this->classname="Etudiant";
    }

    public function add($obj)
    {
        $num_bat=intval($obj['numero_batiment']);
        $type=$obj['type'];
        $sql="INSERT INTO $this->tableName VALUES(DEFAULT,$num_bat,'$type')";
        return $this->executeUpdate($sql)!=0;

    }

    public function update($obj)
    {
       
    }

    public function findAll($limit,$offset)
    {
        $sql="select * from $this->tableName LIMIT $limit OFFSET $offset";
        return $this->executeSelect($sql);
    }



 }