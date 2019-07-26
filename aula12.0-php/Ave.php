<?php

    require_once("Animal.php");

    class Ave extends Mamifero{
        private $corDePenas;

        public function locomover(){
            echo "<p>Voando</p>";
        }
        public function emitirSom(){
            echo "<p>Som das Aves</p>";
        }
        public function alimentar(){
            echo "<p>Comendo fruntas</p>";
        }
        function getCorDePenas(){
            return $this->corDePenas;
        }
        function setCorDePenas($corDePenas){
            $this->corDePenas = $corDePenas;
        }
    }

?>