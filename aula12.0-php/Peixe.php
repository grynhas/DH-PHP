<?php

    require_once("Animal.php");

    class Peixe extends Mamifero{
        private $corDeEscama;

        public function locomover(){
            echo "<p>Nadando</p>";
        }
        public function emitirSom(){
            echo "<p>Som de Peixe</p>";
        }
        public function alimentar(){
            echo "<p>Comida de Peixe</p>";
        }

        function getCorDeEscama(){
            return $this->corDeEscama;
        }
        function setCorDeEscama($corDeEscama){
            $this->corDeEscama = $corDeEscama;
        }
    }

?>