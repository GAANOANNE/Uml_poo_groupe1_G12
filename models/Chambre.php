<?php
    class Chambre implements ICampus
    {
        protected $numero;
        protected $type;
        protected $numero_batiment;

        public function __construct($row=null)
        {
            if($row!=null)
            {
                $this->hydrate($row);
            }
        }
        public function hydrate($row)
        {

        $this->numero = @$row['numero'];
        $this->type = @$row['type'];
        $this->numero_batiment = @$row['numero_batiment'];
        }

        public function getNumero()
        {
            return $this->numero;
        }

        public function setNumero($numero)
        {
            $this->numero=$numero;
        }
        public function getType()
        {
            return $this->type;
        }

        public function setType($type)
        {
            $this->numero=$type;
        }
        public function getNumeroBatiment()
        {
            return $this->numero_batiment;
        }

        public function setNumero_batiment($numero_batiment)
        {
            $this->numero=$numero_batiment;
        }
    }