<?php
require_once("AspiradorDePo.php");
require_once("Pendrive.php");
require_once("AparelhoDeSom.php");
$aspiradorDePo = new AspiradorDePo();
$aspiradorDePo->ligar();
echo"</br>";
$aspiradorDePo->aspirar();
echo"</br>";
$aspiradorDePo->aspirar();
echo"</br>";
$aspiradorDePo->limparFiltro();
echo"</br>";

$penDrive = new Pendrive();
$penDrive->listaDeMusicas = ["m1","m2","m3"];
echo "<hr>";
$aparelhoDeSom = new AparelhoDeSom();
echo "</br>";
$aparelhoDeSom->ligar();
echo "</br>";
$aparelhoDeSom->conectar("cruzer blade");
echo "</br>";
$aparelhoDeSom->aumentarVolume(10);
echo "</br>";
$aparelhoDeSom->aumentarVolume(10);
echo "</br>";
$aparelhoDeSom->aumentarVolume(10);
echo "</br>";
$aparelhoDeSom->diminuirVolume(5);
echo "</br>";
$aparelhoDeSom->diminuirVolume(5);
echo "</br>";
$aparelhoDeSom->diminuirVolume(5);
echo "</br>";
$aparelhoDeSom->diminuirVolume(5);
echo "</br>";
$aparelhoDeSom->diminuirVolume(5);
?>