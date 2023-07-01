<?php
    class Payments{
        public $id;
        public $nomTitular;

        public function __construct($nomTitular) {
            $this->nomTitular = $nomTitular;
        }
    }

?>