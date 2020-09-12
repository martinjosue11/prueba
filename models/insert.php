<?php
header("location: ../pages/insertar.php");
    include 'conexion.php';
    $nombre = $_POST['nombre'];
    $apellidopa = $_POST['apellidopa'];
    $apellidoma = $_POST['apellidoma'];
    $correo = $_POST['correo'];
    $insertar = "INSERT INTO alumnos VALUES(null, '$nombre', '$apellidopa', '$apellidoma', '$correo', CURDATE());";
   
   
    $resultado = mysqli_query($conexion, $insertar);
    if (!$resultado){
        return 'registrar.php';
    }

    
 /*(nombre, apellidopa, apellidoma, correo)*/
 ?>
