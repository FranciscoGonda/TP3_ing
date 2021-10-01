<?php
    class calcular
    {
        public $lado1;
        public $lado2;

        public function __construct($lado1, $lado2){

            $this->lado1 = $lado1;
            $this->lado2 = $lado2;
        }

        public function calcular_superficie(){
            return ($this->lado1 * $this->lado2);
        }

    }

    
?>