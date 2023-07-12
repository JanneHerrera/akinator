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

    <main>

        <?php
        //conectar a la base de datos
        require 'conexion.php';

        //recoger numero de nodo
        $nodo = 1;
        if (isset($_GET['n'])) {
            $nodo = $_GET['n'];
        }
        echo var_dump($nodo);
        //calcular los siguientes nodos

        $nodoSi = $nodo * 2;
        $nodoNo = $nodo * 2 + 1;



        ?>


        <?php


        //Consulta base de datos
        $consulta = "SELECT texto, pregunta FROM arbol WHERE nodo=" . $nodo . ";";
        $texto = '';
        $pregunta = true;
        $resultado;

        if ($resultado = mysqli_query($enlace, $consulta)) {
            if ($resultado->num_rows === 0) {
                echo 'Error - el nodo no existe';
            } else {
                while ($fila = mysqli_fetch_row($resultado)) {
                    $texto = $fila[0];
                    $pregunta = $fila[1];
                }

                if ($pregunta == FALSE) {
                    echo "<div class='contenerdorPregunta'>";
                    echo "<h2>has pensando en..." . $texto . "?</h2>";
                    echo "</div>";
                    echo "<div class='contenedorRespuestas'>";


                    #echo "<a class='boton' href='http://localhost:3000/respuesta.php?nodo=" .$nodo ."&respuesta=1&nombre=".$texto."'>Si</a>";
                    echo "<a  class='boton'href=http://localhost:3000/felicidades.php?Personaje=" . $texto . ">Si</a>";
                    echo "<a class='boton' href='http://localhost:3000/respuesta.php?nodo=" . $nodo . "&respuesta=0&nombre=" . $texto . "'>No</a>";

                    echo "</div>";
                } else {



                    echo "<div class='contenerdorPregunta'>";
                    echo "<h2>tu personaje... " . $texto . "?</h2>";
                    echo "</div>";
                    echo "<div class='contenedorRespuestas'>";

                    echo "<a class='boton' href='http://localhost:3000/index.php?n=" . $nodoSi . "'>Si</a>";
                    echo "<a class='boton' href='http://localhost:3000/index.php?n=" . $nodoNo . "'>No</a>";


                    echo "</div>";
                }
            }
        }
        ?>


    </main>
    <div class='limpiar'></div>

    <br>
    <br>

    <footer>
        <a href=''>volver a probar </a>
    </footer>
</body>

</html>