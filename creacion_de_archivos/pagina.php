<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>


    <?php 

        $ar = fopen("datos.txt","a") or 
        die("problemas con la creacion del archivo");
        fputs($ar,$_REQUEST['nombre']);
        fputs($ar, "\n");
        fputs($ar, $_REQUEST['comentarios']);
        fputs($ar, "\n");
        fputs($ar, "--------------------------------------------------------");
        fputs($ar, "\n");
        fclose($ar);
        echo "Los datos se cargaron correctamente.";
    
    ?>

    
</body>
</html>