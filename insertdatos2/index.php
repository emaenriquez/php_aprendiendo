<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="post" action="pagina2.php">


        ingresar nombre:
        <input type="text" name="nombre">
        ingresar mail:
        <input type="text" name="mail"><br>
        ingresar curso:
        <input type="text" name="codigocurso"> <br>



        <select name="codigocurso">
        <?php 
        
        $conexion = mysqli_connect("localhost","root","","prueba") or die("error en la consulta de base de datos".mysqli_error($conexion));

        $query = mysqli_query($conexion,"select codigocurso,nombre from alumnos") or die("consulta erronea". mysqli_error($conexion));
        
        while($reg = mysqli_fetch_array($query)) {
            echo "<option value=\"$reg[codigo]\">$reg[nombrecurso]</option>";
        }
        
        ?>
        
        </select>
        <br>
        <input type="submit" value="Registrar">
        

    </form>
</body>
</html>