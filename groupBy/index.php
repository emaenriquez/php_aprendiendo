<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php

        $conexion = mysqli_connect("localhost", "root", "", "prueba") or die("problema en la conexion");

        $registro = mysqli_query($conexion, "select count(alu.codigo) as cantidad, nombrecurso 
        from alumnos as alu inner join cursos as cur on cur.codigo=alu.codigocurso group by alu.codigocurso") or die("problema" . mysqli_error($conexion));

        while($reg = mysqli_fetch_array($registro)){
            echo "el nombre del curso: ". $reg['nombrecurso'] . "<br>";
            echo "Cantidad de registro: ". $reg['cantidad'] . "<br>";
            echo "<br>";
        }

        mysqli_close($conexion);


    ?>
</body>

</html>