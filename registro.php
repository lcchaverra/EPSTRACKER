<?php
include_once 'recursos/conexion.php';
include_once'recursos/regbd.php';
$objeto = new Conexion();
$conexion = $objeto->Conectar();

$consulta = "SELECT * FROM eps";
$resultado = $conexion->prepare($consulta);
$resultado->execute();
$usuarios=$resultado->fetchAll(PDO::FETCH_ASSOC);
    include("conexion.php");
    $conexion=conectar();?>

<!doctype html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>EPS Tracker</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.2.0/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="   https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.13.1/css/dataTables.bootstrap5.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/searchpanes/1.0.1/css/searchPanes.dataTables.min.css">
    <link href="https://cdn.datatables.net/select/1.3.1/css/select.dataTables.min.css">
  </head>
  <body>

    <header class="d-flex flex-wrap justify-content-center py-3 mb-4 border-bottom container">
      <a href="/epstracker/index.php" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-dark text-decoration-none">
        <img src="recursos/logo.svg" width="40" class="justify-content-center">
        <span class="fs-4">EPS Tracker</span>
      </a>

      <ul class="nav nav-pills">
        <li class="nav-item"><a href="index.php" class="nav-link">Consulta</a></li>
        <li class="nav-item"><a href="#" class="nav-link active" aria-current="page" id="regmodal">Registro</a></li>
      </ul>
    </header>
    <script src="js/bootstrap.bundle.min.js"></script>


<main class="container">
    <div class="py-5 text-center">
      <img class="d-block mx-auto mb-4" src="recursos/logo.svg" alt="" width="72" height="57">
      <h2>Registro Nueva EPS</h2>
      <p class="lead">Por favor llenar todos los campos del siguiente formulario</p>
    </div>
<form action="agregar.php" method="POST">
      <div class="input-group mb-3">
      <span class="input-group-text" id="basic-addon1">Codigo</span>
      <input type="text" class="form-control" id="ideps" placeholder="Codigo EPS" aria-label="Codigo EPS" aria-describedby="basic-addon1" name="ideps">
     </div>

     <div class="input-group mb-3">
      <span class="input-group-text" id="basic-addon1">Nombre EPS</span>
      <input type="text" class="form-control" id="eps" placeholder="Nombre EPS" aria-label="Nombre EPS" aria-describedby="basic-addon1" name="eps">
     </div>

     <div class="input-group mb-3">
      <span class="input-group-text" id="basic-addon1">Tiempo de Espera</span>
      <input type="text" class="form-control" id="resultado" placeholder="Tiempo de espera promedio" aria-label="Tiempo de espera promedio" aria-describedby="basic-addon1" name="resultado">
     </div>

     <div class="input-group mb-3">
      <span class="input-group-text" id="basic-addon1">Tipo de servicio</span>
      <input type="text" class="form-control" id="nomservicios" placeholder="Servicio que presta" aria-label="Servicio que presta" aria-describedby="basic-addon1" name="nomservicios">
     </div>

     <div class="input-group mb-3">
      <span class="input-group-text" id="basic-addon1">Tipo de Actividad</span>
      <input type="text" class="form-control" id="nomespecifique" placeholder="Actividad para prestar el servicio" aria-label="Actividad para prestar el servicio" aria-describedby="basic-addon1" name="nomespecifique">
     </div>

     <div class="input-group">
      <span class="input-group-text">Detalles</span>
     <textarea class="form-control" id="nomindicador" aria-label="Descripcion corta del servicio" name="nomindicador"></textarea>
    </div>
    <hr class="my-4">
    <button class="w-100 btn btn-primary btn-lg" type="submit">Subir registro</button>
    <hr class="my-4">
</form>

    </form>
      </div>
    </div>
  </main>

  </div>
   <br>
   

  <footer class="container">
    <p class="float-end"><a href="#">Regresar arriba</a></p>
    <p>&copy; Aguacate Explosivo &middot; Team dev &middot; 2022 &middot; Hack The world </p>
  </footer>
</main>
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/1.13.1/js/jquery.dataTables.min.js"></script>
    <script type="https://cdn.datatables.net/1.13.1/js/dataTables.bootstrap5.min.js"></script>
        <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <script src="js/scriptdt.js"></script>
    </script>
  </body>
</html>


