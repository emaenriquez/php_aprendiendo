<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
    $conexion = mysqli_connect("localhost", "root", "", "prueba") or die("Problemas con la conexión");

    mysqli_query($conexion, "update alumnos set mail='$_REQUEST[mailnuevo]' where mail='$_REQUEST[mailviejo]'") or
    die("Problemas en el select:" . mysqli_error($conexion));
    
    echo "El mail fue modificado con exito";
    ?>
</body>
</html>