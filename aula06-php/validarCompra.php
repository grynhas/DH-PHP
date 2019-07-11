<?php
  $nomeCompleto = $_REQUEST["nomeCompleto"];
  $cpf = $_REQUEST["cpf"];
  $numeroCartao = $_REQUEST["numeroCartao"];
  $validade = $_REQUEST["validade"];
  $cvv = $_REQUEST["cvv"];
  
  // campos que vem do input type=hidden de index.php
  $nomeCurso = $_REQUEST["nomeCurso"];
  $precoCurso = $_REQUEST["precoCurso"];

  //arrey
$errors = [];

  // função para validar se nome foi preenchido e possui menos de 15 caracteres
  function validaNome($nomeCompleto){
    return strlen($nomeCompleto) > 0 && strlen($nomeCompleto) <= 15;
  }

  // função para validar se cpf possui 11 caracteres
  function validaCpf($cpf){
    return strlen($cpf) === 11;
  }

  // função para validar e retornar os 4 últimos números do cartão
  function validaNroCartao($numeroCartao){
      if(strlen($numeroCartao) === 16){
        return substr($numeroCartao, -4);
      }   
  }

  // função para validar se cvv possui três caracteres
  function validaCvv($cvv){
    return strlen($cvv) === 3;
  }
  
  // função para valifar a validade 
  function validaData($validade){
    $dataAtual = date('Y-m');
    return $validade > $dataAtual;
  }
  function validarCompra($nome, $cpf, $numeroCartao, $cvv, $validade ){
    global $errors;
    if(!validaNome($nome)){
      arrey_push($errors, 'nome completo é obrigatorio');
    }
    if(!validaNome($cpf)){
      arrey_push($errors, 'CPF invalido');
    }
    if(!validaNroCartao($numeroCartao)){
      array_push($errors, 'Numero cartao invalido');
    }
    if(!validaCvv($cvv)){
      array_push($errors, 'Cvv invalido');
    }
    if(!validaData($validade)){
      array_push($errors, 'validade não condiz');
    }

  }
   validarCompra($nomeCompleto, $cpf, $numeroCartao, $cvv, $validade);


?>


<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Document</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/style.css">
  </head>
  <body>
    <div class="container">
      <div class="col-md-6 col-md-offset-3">
        <?php if(count($errors) > 0): ?>
        <div class="panel panel-danger">
            <div class="panel-heading">
              <span>
                preencha seus dados corretamente.
              </span>
            </div>
            <div class="panel-body">
              <ul class="list-group">
                <?php foreach($errors as $key => $value):?>
                  <li>
                    <?= $value; ?>
                  </li>
                 <?php endforeach; ?>
              </ul>
              <div class="center">
                <a href="index.php">Voltar para home</a>
              </div>
            </div>
          </div>
      <? else: ?>

        <div class="panel panel-primary">
          <div class="panel-heading">Compra Realizada com sucesso!</div>
          <div class="panel-body">
            <ul class="list-group">
              <li class="list-group-item"><strong>Nome Curso:</strong><?php echo $nomeCurso; ?></li>
              <li class="list-group-item"><strong>Preço: R$</strong><?php echo $precoCurso; ?></li>
              <li class="list-group-item"><strong>Nome Completo:</strong><?php echo $nomeCompleto; ?></li>
            </ul>
            <div class="center">
              <a href="index.php">Voltar para a home</a>
            </div>
          </div>
        </div>
        <?php endif; ?>
      </div>
    </div>
  </body>
</html>
