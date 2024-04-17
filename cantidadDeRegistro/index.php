<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
    
    $conexion = mysqli_connect("localhost","root","","prueba") or die("problema en la conexion");

    $registro = mysqli_query($conexion, "select (*) as cantiadad from base1") or die("problema
    en la consulta" . mysqli_error($conexion));

    $reg = mysqli_fetch_array($registro);

    echo "la cantidad de registros es: " . $reg['cantiadad'];

    ?>
</body>
</html>