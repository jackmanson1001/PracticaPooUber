<?php
    class Router{
        private $id;
        private $start;
        private $end;

        // CONSTRUCTOR
        public function __construct($start,$end){
            $this->start = $start;
            $this->end = $end;
        }

        // GETTERS AND SETTERS
        public function getStart(){
            return $start;
        }
        public function setStart($start){
            $this->start = $start;
        }
        public function getEnd(){
            return $end;
        }
        public function setEnd($end){
            $this->end = $end;
        }
    }


?>