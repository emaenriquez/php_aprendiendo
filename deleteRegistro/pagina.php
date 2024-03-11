<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 

    $conexion =mysqli_connect("localhost","root","","prueba") or die('nose pudo conectar a la base de datos');

    $consulta = mysqli_query($conexion,"select codigo from alumnos where mail='$_REQUEST[mail]'")
    or die('problemacion con el select: '. mysqli_error($conexion));


    if($red = mysqli_fetch_array($consulta)){
        mysqli_query($conexion,"delete codigo from alumnos where mail='$_REQUEST[mail]'")
        or die('problemacion con la elimincacion del email: '. mysqli_error($conexion));
        echo('usuario eliminado');
    } else {
        echo 'email no encontrado';
    }
    
    ?>
</body>
</html>