<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <?php 
    
    $ar = fopen("datos.txt", "r") or
    die("No se pudo abrir el archivo");
    while (!feof($ar)) {
        $linea = fgets($ar);
        $lineasalto = nl2br($linea);
        echo $lineasalto;
    }

    fclose($ar);
    
    ?>

</body>
</html>