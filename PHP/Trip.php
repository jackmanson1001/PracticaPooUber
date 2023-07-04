<?php
    require_once('Car.php');
    require_once('Router.php');
    require_once('Payments.php');
    require_once('User.php');

    class Trip{
        private $id;
        private $user;
        private $car;
        private $router;
        private $payments;

        // CONSTRUCTORES
        public function __construct($user,$car,$router,$payments){
            $this->user = $user;
            $this->car = $car;
            $this->router = $router;
            $this->payments = $payments;
        }

        // GETTERS AND SETTERS
        public function getId(){
            return $id;
        }
        public function setId($id){
            $this->id = $id;
        }
        public function getUser(){
            return $user;
        }
        public function setUser($user){
            $this->user = $user;
        }
        public function getCar(){
            return $car;
        }
        public function setCar($car){
            $this->car = $car;
        }
        public function getRouter(){
            return $router;
        }
        public function setRouter($router){
            $this->router = $router;
        }
        public function getPayments(){
            return $payments;
        }
        public function setPayments($payments){
            $this->payments = $payments;
        }

        // METODOS
        public function printDataTrip(){
            echo "
                User: {$this->getUser()->getName()}<br/>
                Driver: {$this->getCar()->getDriver()}<br/>
                Car: {$this->getCar()->getLicense()}<br/>
                Route: {$this->getRouter()->getStart()}<br/>
                Route: {$this->getRouter()->getEnd()}<br/>
                Payment: {$this->getPayments()}
            ";
        }



    }


?>