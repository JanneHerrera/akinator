<?php

require 'conexion.php';

$nodo = $_GET['nodo'];
$nombre = $_GET['nombre'];
$caracteristicas = $_GET['caracteristicas'];
$nombreAnt = $_GET['nombreAnt'];

$numHijoI = $nodo * 2;
$numHijoD = $nodo * 2 + 1;


$nombreHijoI = $nombre;
$nombreHijoD = $nombreAnt;

$pregunta = $caracteristicas;

$consulta = "INSERT INTO arbol (nodo, texto, pregunta) VALUES('" . $numHijoI . "','" . $nombreHijoI . "',FALSE);";
mysqli_query($enlace, $consulta);

$consulta = "INSERT INTO arbol (nodo, texto, pregunta) VALUES('" . $numHijoD . "','" . $nombreHijoD . "',FALSE);";
mysqli_query($enlace, $consulta);

$consulta = "UPDATE arbol SET texto = '" . $pregunta . "', pregunta = TRUE WHERE nodo = '" . $nodo . "'";
mysqli_query($enlace, $consulta);

header("Location:http://localhost:3000/index.php");
