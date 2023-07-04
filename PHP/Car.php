<?php
    require_once('Account.php');
    require_once('Driver.php');
    
    class Car{
        private $id;
        private $license;
        private $driver; // hereda de clase account
        private $passenger;

        //constructor
        public function __construct($license,$driver){
            $this->license = $license;
            $this->driver = $driver;
            // $this->passenger = $passenger;
        }

        //GETTER AND SETTERS
        public function getLicense(){
            return $this->license;
        }
        public function setLicense($license){
            $this->license = $license;
        }
        public function getDriver(){
            return $this->driver;
        }
        public function setDriver($driver){
            $this->driver = $driver;
        }
        public function getPassenger(){
            return $this->passenger;
        }
        public function setPassenger($passenger){
            $this->passenger = $passenger;
        }

        // METHODS
        public function printData(){
            echo 'Licencia: '.$this->getLicense().' Name Driver: '.$this->getDriver()->getName();
            echo "License: {$this->getLicense()} , Conductor: {$this->getDriver()->getName()}, Document: {$this->getDriver()->getDocument()}";
        }
        
        public function setDataPassenger($passenger){
            if($passenger == 4){
                $this->passenger  = $passenger;
                echo "Registraste 4 pasajeros.";
            }else{
                echo "Necesitas asignar 4 pasajeros.";
            } 
            echo "<br/>";
        }

        public function printDataCar(){
            echo "
                <br/>Licencia: {$this->getLicense()}<br/>
                Driver: {$this->getDriver()->getName()}<br/>
                Driver Email: {$this->getDriver()->getEmail()}<br/>
                Numero de Pasajeros: {$this->getPassenger()}<br/>
            ";
        }



    }
?>