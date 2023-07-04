<?php
    require_once('Car.php');
    
    class UberPool extends Car{
        private $brand;
        private $model;

        // CONTRUCTORES
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
        


    }

?>