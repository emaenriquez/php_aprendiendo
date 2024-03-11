<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    

    <?php 
    
    $conexion = mysqli_connect("localhost","root","","prueba") or die("problemas en la conexicion a la bd");
    
    mysqli_query($conexion,"delete from alumnos") or die("problemas con el select". mysqli_error($conexion));

    echo "se encontro la tabla y ya esta borrada";

    mysqli_close($conexion);

    ?>


</body>
</html>