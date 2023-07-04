<?php
    require_once('Car.php');
    
    class UberX extends Car{
        private $brand;
        private $model;

        // CONSTRUCTORES
        public function __construct($license,$driver,$brand,$model){
            parent::__construct($license,$driver); // asi se declara la SUPER CLASE
            $this->brand = $brand;
            $this->model = $model;
        }

        // GETTERS AND SETTERS
        public function getBrand(){
            return $brand;
        }
        public function setBrand($brand){
            $this->brand = $brand;
        }
        public function getModel(){
            return $model;
        }
        public function setModel($model){
            $this->model = $model;
        }

        // METODOS
        public function printDataCar(){
            echo "
                <br/>
                Licencia: {$this->getLicense()}<br/>
                Driver: {$this->getDriver()->getName()}<br/>
                Numero de pasajeros: {$this->getPassenger()}<br/>
                Marca: {$this->getBrand()}<br/>
                Modelo: {$this->getModel()}<br/>
            ";
        }
        
    }

?>