<?php
require 'conexion.php';

$buscar = "SELECT * FROM alumnos";
$consulta = mysqli_query($conexion, $buscar);
$arreglo = mysqli_fetch_array($consulta);
 ?>