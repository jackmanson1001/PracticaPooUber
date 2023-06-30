<?php
    require_once('Car.php');
    
    class UberPool extends Car{
        public $brand;
        public $model;

        public function __construct($license,$driver,$brand,$model){
            parent::__construct($license,$driver); // asi se declara la SUPER CLASE
            $this->brand = $brand;
            $this->model = $model;
        }
    }

?>