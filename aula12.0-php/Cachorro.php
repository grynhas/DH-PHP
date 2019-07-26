<?php
    require_once("Mamifero.php");

    class Cachorro extends Mamifero{
        public function locomover(){
            echo "<p>Sou um Cachorro e estou correndo</p>";
        }
        public function emitirSom(){
            echo "<p>Au Au</p>";
        }
        public function roerOsso(){
            echo "<p>roendo Osso</p>";
        }
    }
?>