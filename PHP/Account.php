<?php
    class Account{
        private $id;
        private $name;
        private $document;
        private $email;
        private $password;

        //constructor
        public function __construct($name,$document){
            $this->name = $name;
            $this->document = $document;
        }

        //setter and getters
        public function getName(){
            return $this->name;
        }
        public function setName($name){
            $this->name = $name;
        }
        public function getDocument(){
            return $this->document;
        }
        public function setDocument($document){
            $this->document = $name;
        }
        public function getEmail(){
            return $this->email;
        }
        public function setEmail($email){
            $this->email = $email;
        }
        // por seguridad no existe el getPassword
        public function setPassword($password){
            $this->password = $password;
        }
    }

?>