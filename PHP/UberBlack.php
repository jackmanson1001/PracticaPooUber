<?php
    require_once('Car.php');
    
    class UberBlack extends Car{
        private $typeCarAccepted;
        private $seatsMaterial;

        // CONSTRUCTOR
        public function __construct($license,$driver,$typeCarAccepted,$seatsMaterial){
            parent::__construct($license,$driver); // asi se declara la SUPER CLASE
            $this->typeCarAccepted = $typeCarAccepted;
            $this->seatsMaterial = $seatsMaterial;
        }

        //GETTERS AND SETTERS
        public function getTypeCarAccepted(){
            return $typeCarAccepted;
        }
        public function setTypeCarAccepted($typeCarAccepted){
            $this->typeCarAccepted = $typeCarAccepted;
        }
        public function getSeatMaterial(){
            return $seatsMaterial;
        }
        public function setSeatMaterial($seatsMaterial){
            $this->seatMaterial = $seatsMaterial;
        }

        // METODOS

        


    }


?>