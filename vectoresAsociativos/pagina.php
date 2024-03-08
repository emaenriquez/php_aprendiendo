<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <?php 
    
        $suma = 0;

        foreach ($_REQUEST as $clave => $valor) {
            echo 'el valor:' . $valor;
            echo '<br>';
            $suma = $suma + $valor;
        }

        echo "La suma es: " . $suma;
    
    ?>


</body>
</html>