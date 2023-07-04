<?php
    require_once('Car.php');
    
    class UberVan extends Car{
        private $typeCarAccepted;
        private $seatsMaterial;
        // private $passenger;

        // CONSTRUCTORS
        public function __construct($license,$driver,$typeCarAccepted,$seatsMaterial){
            parent::__construct($license,$driver); // asi se declara la SUPER CLASE
            $this->typeCarAccepted = $typeCarAccepted;
            $this->seatsMaterial = $seatsMaterial;
        }
        
        // public function __construct($license,$driver){
        //     parent::__construct($license,$driver); // asi se declara la SUPER CLASE 
        // }

        // GETTERS AND SETTERS
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
        // public function getPassenger(){
        //     return $passenger;
        // }

        // METODOS
        public function setDataPassenger($passenger){ // EN PHP EL POLIMORFISMO LA CLASE HIJO SOBRE ESCRIBE A LOS PADRES
            if($passenger == 6){
                $this->passenger  = $passenger;
                echo "Registraste {$this->getPassenger()} pasajeros.";
            }else{
                echo "Necesitas asignar 6 pasajeros.";
            }
            
        }

    }



?>