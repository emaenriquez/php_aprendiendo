<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
    // valor y tipo de dato de una variable
    $name = 'emanuel';
    var_dump($name); // evitar en produccion
    echo gettype($name); // muestra el tipo
    is_string($name);
    is_bool($name);
    is_null($name);
    is_int($name);

    // tipe casting
    $age = (bool) 25;
    echo "hola tengo " . $age . " anios";

    // interpolacion de cadenas
    $output =  "hola tengo $age anios";
    $output =  "hola tengo \$age anios";

    // constante
    // globales
    define('PI', 3.1416);

    echo PI;

    // locales
    const GRAVEDAD = 9.8;

    echo "la grabedad es:". GRAVEDAD; // no funcionan dentro de ejucion ejemplo bucle
    $isOld =true;
    
    // ternario
    $outputAge = $isOld ? 'es mayor de edad' : 'es menor de edad';

    ?>
    <h2><?= $outputAge ?></h2>
    
   <!-- forma alternativa del if -->
    <?php if(isOld) : ?>
        <h1>es mayor de edad</h1>
    <?php elseif(isOld) : ?>
        <h1>es menor de edad</h1>
    <?php else : ?>
        <h1>es menor de edad</h1>
    <?php endif ?>


</body>
</html>