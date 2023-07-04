<?php
    require_once('Payments.php');

    class Cash extends Payments{

        public function __construct($nomTitular){
            parent::__construct($nomTitular); // asi se declara la SUPER CLASE
        }
        
    }


?>