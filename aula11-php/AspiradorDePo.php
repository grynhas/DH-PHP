<?php
require_once("Equipamento.php");
class AspiradorDePo extends Equipamento {
    public $filtro;
    
    public function __construct(){
        $this->filtro = [];

    }
    
    public function aspirar(){
        if(count($this->filtro)< 10){
            array_push($this->filtro, "nova Sujeira");
            echo "adicionado nova sujeira";
        }else{
            echo "Filtro de Sujeira está cheio";
        }
    }
    public function limparFiltro(){
        foreach ($this->filtro as $value) {
            if($value){
                array_pop($this->filtro);
            }
        }
        echo "O filtro de sujeira do Aspirador está vazio";

    }
    
}
?>