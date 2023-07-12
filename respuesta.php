<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Akinator</title>
    <link rel='stylesheet' type='text/css' href='css/akinator.css'>
</head>

<body>
    <header>
        <h1>Akinator</h1>
    </header>

</body>
<main>
    <?php
    require 'conexion.php';
    $nodo = $_GET['nodo'];
    $respuesta = $_GET['respuesta'];
    $nombre = $_GET['nombre'];

    function formularioRespuesta($n, $p, $nom)
    {
        echo "<div class='contenedorPregunta'>";

        echo "<textarea id='nodo' name='nodo' form='formulario' style='display:none;'>" . $n . "</textarea>";
        echo "<textarea id='nombreAnt' name='nombreAnt' form='formulario' style='display:none;'>" . $nom . "</textarea>";

        echo "<h2>¿En quién habías pensado?</h2>";
        echo "<textarea id='nombre' name='nombre' form='formulario' placeholder='nombre'></textarea>";
        echo "<h2>¿Qué característica tiene este personaje que no tenga " . $nom . "?</h2>";
        echo "<textarea id='caracteristicas' name='caracteristicas' form='formulario' placeholder='caracteristicas'></textarea>";

        echo "<form action='crear.php' id='formulario' method='GET'>";
        echo "<button type='submit' name='enviar'>Enviar</button>";
        echo "</form>";

        echo "</div>";
    }



    formularioRespuesta($nodo, $respuesta, $nombre);
    ?>

</main>


</html>