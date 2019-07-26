<?php
 //modelo
    require_once("Animal.php");
    require_once("Mamifero.php");
    require_once("Ave.php");
    require_once("Peixe.php");
    require_once("Repitil.php");

    // filha
    require_once("Cachorro.php");
    require_once("Arara.php");
    require_once("Tilapia.php");
    require_once("Tartaruga.php");

    $mamifero = new Mamifero();
    echo "<h1>Mamiferos</h1>";
    $mamifero->setCorDePelos("branco");
    echo "Cor de pelos: ". $mamifero->getCorDePelos();
    $mamifero->locomover();
    $mamifero->alimentar();
    $mamifero->emitirSom();
    echo"<hr>";

    $cachorro = new Cachorro();
    $cachorro->locomover();
    $cachorro->alimentar();
    $cachorro->emitirSom();
    $cachorro->roerOsso();
    echo"<hr>";

    echo "<h1>ave</h1>";
    $ave = new Ave();
    $ave->getCorDePenas();
    echo "Cor de penas: " . $ave->getCorDePenas();   
    $ave->locomover();
    $ave->alimentar();
    $ave->emitirSom();
    echo "<hr>";

    echo "<h1>Arara</h1>";
    echo "<hr>";
    $arara = new  Arara();
    $arara->setCorDePenas("azul");
    echo "Cor de penas: " . $arara->getCorDePenas(); 
    $arara->locomover();
    $arara->alimentar();
    $arara->emitirSom();
    echo "<hr>";
    echo "<h1>Peixe</h1>";
    echo "<hr>";
    $peixe = new Peixe();
    $peixe->setCorDeEscama("Roxo");
    echo "Cor de penas: " . $peixe->getCorDeEscama(); 
    $peixe->locomover();
    $peixe->alimentar();
    $peixe->emitirSom();

    echo "<hr>";
    echo "<h1>Tilapia</h1>";
    echo "<hr>";
    $tilapia = new Tilapia();
    $tilapia->setCorDeEscama("preta");
    echo "Cor de penas: " . $tilapia->getCorDeEscama(); 
    $tilapia->locomover();
    $tilapia->alimentar();
    $tilapia->emitirSom();

    echo "<hr>";
    echo "<h1>repitil</h1>";
    echo "<hr>";
    $repitil = new Repitil();
    $repitil->setCorDePele("preta");
    echo "Cor de penas: " . $repitil->getCorDePele(); 
    $repitil->locomover();
    $repitil->alimentar();
    $repitil->emitirSom();

    echo "<hr>";
    echo "<h1>tartaruga</h1>";
    echo "<hr>";
    $tartaruga = new Tartaruga();
    $tartaruga->setCorDePele("preta");
    echo "Cor de penas: " . $tartaruga->getCorDePele(); 
    $tartaruga->locomover();
    $tartaruga->alimentar();
    $tartaruga->emitirSom();
?>