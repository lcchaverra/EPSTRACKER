<?php
    include("conexion.php");
    $conexion=conectar();

    //Valores del formulario
    $ideps=$_POST['ideps'];
    $eps=$_POST['eps'];
    $resultado=$_POST['resultado'];
	$nomservicios=$_POST['nomservicios'];
    $nomespecifique=$_POST['nomespecifique'];
    $nomindicador=$_POST['nomindicador'];

    //se Obtiene la longitud del string
    // $req = (strlen($ideps)*strlen($eps)*strlen($resultado)*strlen($nomservicios)*strlen($nomespecifique)*strlen($nomindicador)) or die("<html><script>alert('Error En la autenticacion'); window.location.replace('index.php');</script></html>");
    
    //igresar la informacion a la tabla de datos
    mysqli_query($conexion,"INSERT INTO eps VALUES ('$ideps','$eps','$nomservicios','$nomespecifique','$nomindicador','$resultado')") or die ("<html><script>alert('Registro exitoso')</script></html>");

    echo '
    <html>
    <head>
    <script defer src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script defer src="js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/styles.css">
    <title>Cargando...</title>
    </head>
    <body>
    <div class="text-center">
      <div class="spinner-border" role="status" style="width: 7rem; height: 7rem; margin-top: 17rem;">
        <span class="visually-hidden"></span>
      </div>
    </div>
    </body>
    <script>
    alert("Registro exitoso"); 
    window.location.replace("registro.php");
    </script>
    </html>
    '
?>
