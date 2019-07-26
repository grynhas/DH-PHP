<?php
    //se torna uma classe abstrata por mudar 
    // o comportamento das classes que irão implementá-las 
    abstract class Equipamento {
        public $ligado;

        public function ligar(){
            if($this->ligado){
                echo "o equipamento já está ligado"; 
            } else {
                $this->ligado = true;
                echo "Você ligou o equipamento.";
            }
        }

        public function desligar(){
            if(!$this->ligado){
                echo "o equipamento já está desligado";
            } else {
                $this->ligado = false;
                echo "Você desligou o equipamento.";
            }
        }
    }
?>