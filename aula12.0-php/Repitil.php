<?php

    require_once("Animal.php");

    class Repitil extends Mamifero{
        private $corDePele;

        public function locomover(){
            echo "<p>Correndo/Nadando</p>";
        }
        public function emitirSom(){
            echo "<p>Som de Repitil</p>";
        }
        public function alimentar(){
            echo "<p>Comendo ******* </p>";
        }

        function getCorDePele(){
            return $this->corDePele;
        }
        function setCorDePele($corDePele){
            $this->corDePele = $corDePele;
        }

    }

?>