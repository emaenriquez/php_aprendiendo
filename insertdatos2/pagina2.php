<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
    $conexion = mysqli_connect("localhost","root","","prueba") or die("error en la consulta de base de datos".mysqli_error($conexion));

    $query = mysqli_query($conexion,"insert into alumnos(nombre,mail,codigocurso) 
    values ('$_REQUEST[nombre]','$_REQUEST[mail]',$_REQUEST[codigocurso])") or die("consulta erronea". mysqli_error($conexion));

    mysqli_close($conexion);
    echo "El alumno fue dado de alta.";
    ?>
</body>
</html>