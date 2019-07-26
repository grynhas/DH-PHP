<?php
require_once("Equipamento.php");

class aparelhoDeSom extends Equipamento {
    public $volume;
    public $numeroFaixa;
    public $usb;

    public function __construct(){
        $this->volume = 0;
        $this->numeroFaixa = 0;
    }
    public function conectar($penDrive){
        $this->usn = $penDrive;
        echo "O penDrive $this->usb foi conectado";
    }
    public function aumentarVolume($valorVolume){
        $this->volume += $valorVolume;
        if($this->ligado && $this->volume <= 20){
        echo "O valor do seu Volume aTualmente é $this->volume";
    }else if ($this->ligado) {
        $this->volume = 20;
        echo "você esta no volume Maximo que é $this->volume";
    }
 }
 public function diminuirVolume($valorVolume){
    $this->volume -= $valorVolume;
    if($this->ligado && $this->volume >= 0){
    echo "O valor do seu Volume atualmente é $this->volume";
}else if ($this->ligado) {
    $this->volume = 0;
    echo "você esta no volume Maximo que é $this->volume";
}
}
 
}
