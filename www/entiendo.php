<html>
<head>
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
  <form class="row g-1" action='index.php' method='get'>
  <?php
    $haria = (int) $_GET["haria"];
    $numero = rand(1,100);
    if ($haria == $numero){
      echo "¡Ganaste! El numero es el $numero";
    } elseif($haria > $numero){
      echo "¡Perdiste! El numero era el $numero, tu número es demasiado grande";
    } else{
      echo "¡Perdiste! El numero era el $numero, tú número es demasiado pequeño";
    }
  ?>
   <button type="submit" class="btn btn-primary">Volver</button>

</body>
</html>
