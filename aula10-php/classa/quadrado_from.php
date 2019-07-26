<?php
require_once("../classa/quadrado.php");
if($_POST){
    $ladoA = $_REQUEST["ladoA"];
    $ladoB = $_REQUEST["ladoB"];

    $area = new Quadrado();

    $area->$ladoA = $ladoA;
    $area->$ladoB = $ladoB;

    $resultado = $area-> calculaArea();
}
?>
<!DOCTYPE html>
 <html lang="en">
 <head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <meta http-equiv="X-UA-Compatible" content="ie=edge">
     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
     <title></title>
 </head>
 <body>
     
     <form class="" action="" method="post">
           <div class="form-row">
             <div class="form-group col-md-12">
               <div class="col-md-4">
                 <label for="arestaUm">Aresta Um</label>
                 <input type="text" class="form-control" name="arestaUm" id="arestaUm">
               </div>
             </div>
             <div class="form-group col-md-12">
               <div class="col-md-4">
                 <label for="arestaDois">Aresta Dois</label>
                 <input type="text" class="form-control" name="arestaDois" id="arestaDois">
               </div>
             </div>
             <div class="form-group col-md-12">
               <div class="col-md-2">
                 <button type="submit" class="form-control btn btn-primary">Enviar</button>
               </div>
             </div>
           </div>
         </form>
<?php
if($resultadp):?>
<div class="col-md-12">
    <div class="col-md-2 alert alert-success">
    <p><?= "À área do quadrado é: ".$resultado ?></p>
    </div>
</div>
<?php endif; ?>
 </body>
 </html>
