<?php
    class Car{
        private $id;
        private $license;
        private $driver; // hereda de clase account
        private $passenger;

        //constructor
        public function __construct($license,$driver){
            $this->license = $license;
            $this->driver = $driver;
        }

        // getter and setters
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

        public function printData(){
            return getLicense();
            // echo 'Licencia: '.$this->getLicense().' Name Driver: '.$this->getDriver();
            // echo "License: $this->license, Conductor: {$this->driver->name}, Document: {$this->driver->document}";
        }

    }
?>