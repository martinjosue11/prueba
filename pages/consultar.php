<?php
require '../models/buscar.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="icon" type="image/png" href="../img/3.png" />
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD "Alumnos"</title>
    <link rel="stylesheet" href="../css/style.css">
</head>

<body>
    <table>
        <thead>
            <tr>
                <th>id</th>
                <th>nombre</th>
                <th>Apellido Paterno</th>
                <th>Apellido Materno</th>
                <th>Correo</th>
                <th>Fecha</th>
            </tr>
        </thead>
        <tbody id="datos">
            <?php
            foreach($consulta as $mostrar){ ?>
        <tr>
            <td><?php echo $mostrar['id']; ?></td>
            <td><?php echo $mostrar['nombre']; ?></td>
            <td><?php echo $mostrar['apellidopa']; ?></td>
            <td><?php echo $mostrar['apellidoma']; ?></td>
            <td><?php echo $mostrar['correo']; ?></td>
            <td><?php echo $mostrar['fecha']; ?></td>
        </tr>
    </tbody>
    <?php
            }
            ?>
    </table>

    <script>
        function accion() {
            var ancla = document.getElementsByClassName('nav-enlace');
            for (var i = 0; i < ancla.length; i++) {
                ancla[i].classList.toggle('desaparece');
            }
        }
    </script>


</body>

</html>