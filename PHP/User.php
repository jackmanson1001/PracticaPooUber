<?php
    require_once('Account.php');

    class User extends Account{

        // CONSTRUCTOR
        public function __construct($name,$document,$email,$password){
            parent::__construct($name,$document,$email,$password);
        }

        // GETTERS AND SETTERS
        
    }



?>