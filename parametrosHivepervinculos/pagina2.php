<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 

        // $nombre = $_GET['nombre'];
        // $edad = $_GET['edad'];

        $numTabla = $_GET['tabla'];

        // echo "hola $nombre tu edad es $edad";

        for ($i=1; $i < 11; $i++) { 
            
            $valor = $i * $numTabla;

            echo "$valor <br>";

        }

    ?>
</body>
</html>