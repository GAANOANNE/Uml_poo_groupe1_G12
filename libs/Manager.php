<?php
    abstract class Manager implements IDao
    {
        private $pdo=null;
        protected $tableName;
        protected $className;

        private function getConnexion()
        {
            if($this->pdo==null)
            {
                try
                {
                 //   $this->pdo = new PDO("mysql:host=mysql-smb.alwaysdata.net;dbname=smb_crudpoo","smb","passemouhamed");
                 $this->pdo = new PDO("mysql:host=localhost;dbname=gestion_campus;charset=utf8", "root", "passemouhamed");
                    $this->pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE,PDO::FETCH_ASSOC);
                }
                catch(PDOException $ex)
                {
                    die("erreur de connexion");
                }
            }
        }

        private function closeConnexion()
        {
            if($this->pdo!=null)
            {
                $this->pdo=null;
            }
            
        }

        public function executeUpdate($sql)
        {
            $this->getConnexion();
            $nbreLigne=$this->pdo->exec($sql);
            $this->closeConnexion();
            
            return $nbreLigne;
        }

        public function executeSelect($sql)
        {
            try{
                $this->getConnexion();
                $result = $this->pdo->query($sql);
                //  $data=[];

                //  foreach($result as $rowBD)
                //  {
                //      $data[]=new $this->classname($rowBD);
                //  }
                $this->closeConnexion();
                //return $data;
           return $result->fetchAll();
            }
            catch(Exception $ex)
            {
                return $ex->getMessage();
            }
        }

        public function findAll($limit, $offset)
        {
         $sql = "select * FROM $this->tableName limit $limit offset $offset";
        //$sql = " SELECT * FROM `chambres`";
           // $sql="select * FROM $this->tableName ORDER BY `numero` DESC LIMIT $limit OFFSET $offset ";
        return  $this->executeSelect($sql);
         //$this->errorInfo();
        }

        public function findById($numero)
        {
            $sql="select * from $this->tableName where `numero`=$numero";
            $data=$this->executeSelect($sql);
            return count($data)==1? $data[0]:$data;
        }

        public function delete($id)
        {
            try
            {
                
                    $intId=intval($id);
                    $sql="DELETE FROM $this->tableName WHERE `id`=$intId";
                  return  $this->executeUpdate($sql);
                     
            }
            catch(Exception $ex)
            {
                return false;
            }
        }
    } 