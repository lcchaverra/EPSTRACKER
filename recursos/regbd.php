<?php 
if (!empty($_POST['enviarreg'])) {
    if (!empty($_POST["codigo"]) and !empty($_POST["noeps"]) and !empty($_POST["tepera"]) and !empty($_POST["tserv"]) and !empty($_POST["aserv"]) and !empty($_POST["detalles"])) {
        echo "campos llenos";
    }else{
        echo"chi¡¡¡";
    }
    }
