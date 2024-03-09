<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
    
    $conexion = mysqli_connect("localhost","root","","prueba") or
    die("problema en la conexion");

    mysqli_query($conexion, "insert into alumnos(nombre,mail,codigocurso) values 
    ('$_REQUEST[nombre]','$_REQUEST[mail]',$_REQUEST[codigocurso])")
    or die("Problemas en el select" . mysqli_error($conexion));
    
    mysqli_close($conexion);

    echo "fue dada de alta el alumno"
    
    ?>
</body>
</html>