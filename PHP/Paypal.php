<?php
    require_once('Payments.php');

    class Paypal extends Payments{

        public $email;

        public function __construct($nomTitular,$email) {
            parent::__construct($nomTitular); // asi se declara la SUPER CLASE
            $this->email = $email;
        }


    }

?>