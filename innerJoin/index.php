<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
    
        $conexion = mysqli_connect("localhost","root","","prueba");

        $query = mysqli_query($conexion,"select alu.codigo , nombre , mail,codigocurso,nombrecurso from alumnos as alu inner join base1 on 
        base1.codigo=alu.codigocurso") or die("problema con la query". mysqli_error($conexion));


        while($rdg = mysqli_fetch_array($query)){
            echo "Codigo:" . $reg['codigo'] . "<br>";
            echo "Nombre:" . $reg['nombre'] . "<br>";
            echo "Mail:" . $reg['mail'] . "<br>";
            echo "Curso:" . $reg['nombrecurso'] . "<br>";
            echo "<hr>";
        }
        
        mysqli_close($conexion);
    
    
    ?>
</body>
</html>