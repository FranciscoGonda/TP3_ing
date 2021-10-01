<?php
    class calcular
    {
        public $lado1;
        public $lado2;

        public function __construct($lado1, $lado2){

            $this->lado1 = $lado1;
            $this->lado2 = $lado2;
        }

        public function sumar_lados(){
            return ($this->lado1 + $this->lado2);
        }

    }

    
?>