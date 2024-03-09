<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
    
    $conexion = mysqli_connect("localhost", "root", "", "prueba") or
    die("Problemas con la conexión");

    $registrosAlumnos = mysqli_query($conexion, "select codigo,nombre,mail,codigocurso from alumnos") or
    die("Problemas en el select:" . mysqli_error($conexion));

    $registrosCursos = mysqli_query($conexion, "select codigo,nombrecurso from base1") or
    die("Problemas en el select:" . mysqli_error($conexion));

    while ($reg = mysqli_fetch_array($registrosAlumnos)) {
        echo "Codigo:" . $reg['codigo'] . "<br>";
        echo "Nombre:" . $reg['nombre'] . "<br>";
        echo "Mail:" . $reg['mail'] . "<br>";
        echo "Curso:";
        switch ($reg['codigocurso']) {
            case 1:
              echo "PHP";
              break;
            case 2:
              echo "ASP";
              break;
            case 3:
              echo "JSP";
              break;
        }
        echo "<br>";
        echo "<hr>";
    }

    while($reg = mysqli_fetch_array($registrosCursos)){
        echo "Codigo:" . $reg['codigo'] . "<br>";
        echo "Nombre:" . $reg['nombrecurso'] . "<br>";
        echo "<br>";
        echo "<hr>";
    }


    mysqli_close($conexion);
    ?>
</body>
</html>