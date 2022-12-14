<?php
include_once 'recursos/conexion.php';
$objeto = new Conexion();
$conexion = $objeto->Conectar();

$consulta = "SELECT * FROM eps";
$resultado = $conexion->prepare($consulta);
$resultado->execute();
$usuarios=$resultado->fetchAll(PDO::FETCH_ASSOC);
?>

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

    <header class="d-flex flex-wrap justify-content-center py-3 mb-4 border-bottom co container">
      <a href="/epstracker/index.php" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-dark text-decoration-none">
        <img src="recursos/logo.svg" width="40" class="justify-content-center">
        <span class="fs-4">EPS Tracker</span>
      </a>

      <ul class="nav nav-pills">
        <li class="nav-item"><a href="#consultafiltro" class="nav-link active" aria-current="page">Consulta</a></li>
        <li class="nav-item"><a href="registro.php" class="nav-link" id="regmodal">Registro</a></li>
      </ul>
    </header>
    <script src="js/bootstrap.bundle.min.js"></script>
<main>
<br>
  <div id="myCarousel" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
      <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="recursos/img/corona.jpg" width="100%" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false">

        <div class="container">
          <div class="carousel-caption text-start">
            <h3>COVID - 19</h3>
            <p>Una amenaza latente</p>
            <p><a class="btn btn-lg btn-primary" href="#consultafiltro">Consulta las mejores EPS hoy!</a></p>
          </div>
        </div>
      </div>
      <div class="carousel-item">
        <img src="recursos/img/virus2.jpg" width="100%" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false">

        <div class="container">
          <div class="carousel-caption">
            <h1>Variantes</h1>
            <p>Vacunas son el metodo mas efectivo contra el coronavirus</p>
            <p><a class="btn btn-lg btn-primary" href="#consultafiltro">Consulta las mejores EPS hoy!</a></p>
          </div>
        </div>
      </div>
      <div class="carousel-item" >
        <img src="recursos/img/virus.jpg" width="100%" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false">
  

        <div class="container">
          <div class="carousel-caption text-end">
            <h1>Vacunate</h1>
            <p>Consulta las mejores EPS</p>
            <p><a class="btn btn-lg btn-primary" href="#consultafiltro">AQUI</a></p>
          </div>
        </div>
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Anterior</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Siguiente</span>
    </button>
  </div>




  <div class="container marketing">
    <br>
    <div class="row">
      <div class="col-lg-4">
          <img src="recursos/img/bien.svg" width="140" height="140" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 140x140" preserveAspectRatio="xMidYMid slice" focusable="false">
          <br>
        <h2 class="fw-normal">Consultas</h2>
        <p>Presentar las organizaciones mejor calificadas en sus servicios</p>
      </div><!-- /.col-lg-4 -->
      <div class="col-lg-4">
        <img src="recursos/img/buscar.svg" width="140" height="140" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 140x140" preserveAspectRatio="xMidYMid slice" focusable="false">
        <br>
        <h2 class="fw-normal">Consulta tipo B</h2>
        <p>Filtrar y auto seleccionar las EPS u organizaciones prestadoras de salud con mejor experiencia en atencion a usuarios</p>
      </div><!-- /.col-lg-4 -->
      <div class="col-lg-4">
        <img src="recursos/img/registrar.svg" width="140" height="140" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 140x140" preserveAspectRatio="xMidYMid slice" focusable="false">
        <br>
        <h2 class="fw-normal">Inscripciones</h2>
        <p>Inscribir nuevas organizaciones en nuestras bases de datos.</p>
        <p><a class="btn btn-secondary" href="registro.php">Registrate aqui &raquo;</a></p>
      </div>
    </div>


    <hr id="consultafiltro" class="featurette-divider">

    <table id="eps" class="table table-striped" style="width:100%">
      <thead class="text-center">
        <th>Ideps</th>
        <th>Nombre EPS</th>
        <th>Tiempo de espera</th>
        <th>Tipo de servicio</th>
        <th>Tipo de actividad</th>
        <th>detalle</th>
      </thead>
      <tbody>
        <?php
            foreach($usuarios as $usuario){
        ?>
        <tr>
            <td><?php echo $usuario['ideps']?></td>
            <td><?php echo $usuario['eps']?></td>
            <td><?php echo $usuario['resultado']?></td>
            <td><?php echo $usuario['nomservicios']?></td>
            <td><?php echo $usuario['nomespecifique']?></td>
            <td><?php echo $usuario['nomindicador']?></td>

        </tr>
        <?php
           }
        ?>
      </tbody>
    </table>

  </div>

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
    <script type="text/javascript" src="https://cdn.datatables.net/v/bs4/dt-1.10.20/datatables.min.js"></script>  
    <script src="https://cdn.datatables.net/searchpanes/1.0.1/js/dataTables.searchPanes.min.js"></script>
    <script src="https://cdn.datatables.net/select/1.3.1/js/dataTables.select.min.js"></script>  
    <script src="js/scriptdt.js"></script>
    </script>
  </body>
</html>


