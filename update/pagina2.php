<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

    $conexion = mysqli_connect("localhost", "root", "", "prueba") or die("Problemas con la conexión");

    $registros = mysqli_query($conexion, "select * from alumnos where mail='$_REQUEST[mail]'") or 
    die("Problemas en el select:" . mysqli_error($conexion));
    
    if ($reg = mysqli_fetch_array($registros)) {

    } else
      echo "No existe alumno con dicho mail";
    ?>

    <form action="pagina3.php" method="post">
        Ingrese nuevo mail:
        <input type="text" name="mailnuevo" value="<?php echo $reg['mail'] ?>">
        <br>
        <input type="hidden" name="mailviejo" value="<?php echo $reg['mail'] ?>">
        <input type="submit" value="Modificar">
    </form>

</body>
</html>