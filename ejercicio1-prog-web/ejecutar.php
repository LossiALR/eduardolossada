<?php 
    include './funciones.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Hipotenusa</title>
    
    <!-- CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
<link rel="stylesheet" href="./css/style.css">
<!-- jQuery and JS bundle w/ Popper.js -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
</head>
<body>
<div class="container">
  <div class="abs-center">
    <form action="#" class="border p-3 form">
    <h3 class="text-center font-italic">Resultados sobre tu procedimiento</h3>
    <br>
        <?php
          
          $respuesta='La hipotenusa del triángulo rectángulo de '.$catetoa.' y '.$catetob .' cm es';
          $raiz=null;
          $cuadrado=null;
      
          $cuadrado = pow($catetoa,2)+pow($catetob,2);
          $raiz=sqrt($cuadrado);?>
        
        <div class="alert alert-success" role="alert">
            <h4 class="alert-heading">Excelente!</h4>
                <p>Tu resultado es:</p>
            <hr>
         <p class="mb-0"><?php echo "$respuesta $raiz" ." cm<sup>2</sup>.";?></p>
        </div>
         
        
        
    
      <a href="./index.php"class="btn btn-danger btn-block">Regresar</a>
      <footer class="blockquote-footer">
            Elaborado por el <cite title="Source Title">Eduardo Lossada</cite>
        </footer>
    </form>
  </div>
</div>
</body>
</html>
