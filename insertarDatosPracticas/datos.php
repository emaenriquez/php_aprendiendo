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
    die("tenemos problema en la conexion");

    mysqli_query($conexion,"insert into base1(nombrecurso) values
    ('$_REQUEST[nombre]')") 
    or die('prblemas con el select' . mysqli_error($conexion));

    mysqli_close($conexion);

    echo "se incribio correctamente";

    
    
    ?>
</body>
</html>