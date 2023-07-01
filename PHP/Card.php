<?php
    require_once('Payments.php');

    class Card extends Payments{
        public $id;
        public $numberCard;
        public $cvv;
        public $date;

        public function __construct($nomTitular,$numberCard,$cvv,$date) {
            parent::__construct($nomTitular); // asi se declara la SUPER CLASE
            $this->numberCard = $numberCard;
            $this->cvv = $cvv;
            $this->date = $date;
        }
    }


?>