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
    <nav>
        <button class="nav-boton" onclick="accion()">Menú</button>
        <a href="../index.html" class="nav-enlace desaparece">Inicio</a>
        <a href="consultar.php" class="nav-enlace desaparece">Buscar</a>
        <a href="actualizar.php" class="nav-enlace desaparece">Actualizar</a>
        <a href="borrar.php" class="nav-enlace desaparece">Borrar</a>
    </nav>
    <br>
    <form action="../models/insert.php" method="POST" class="formulario">
        <label for="nombre">Nombre</label>
        <input type="text" name="nombre" id="nombre" required="" placeholder="Nombre" />
        <label for="apellidopa">Apellido Paterno</label>
        <input type="text" name="apellidopa" id="apellidopa" required="" placeholder="Apelldo Paterno" />
        <label for="apellidoma">Apellido Materno</label>
        <input type="text" name="apellidoma" id="apellidoma" required="" placeholder="Apellido Materno" />
        <label for="correo">Correo</label>
        <input type="text" name="correo" id="correo" required="" placeholder="Correo" />
        <input type="submit" value="Enviar Datos" />
    </form>
    <br>
    <br><img src="../img/1.jpg" class="imagen1">
    <img src="../img/2.jpg" class="imagen2">

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