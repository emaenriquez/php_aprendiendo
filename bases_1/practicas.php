<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php 
    echo('hola mundo');
    $dia = date('d');
    if ($dia <= 10) {
        echo 'sitio activo';
    } else {
        echo 'sitio fuera de servicio';
    }
    $num = rand(1,100);
    echo $num;
    echo '<br>';
    if($num <= 50) { 
        echo 'el numero es menor o igual a 50';
    } else {
        echo 'el numero es mayor a 50';
    }
    // variables
    $numero = 100;
    $numero_float = 100.00;
    $str = 'hola mundo';
    $FalsoVerdadero = true;
    $cadena = 'ema';
    $cadena2 = 'rodri';
    $cadena3 = 'el carlos';
    $todo = "<br>" . $cadena . " ". $cadena2  ." ". $cadena3 . '<br>';
    echo $todo;
    $edad = 23;
    echo $cadena2 . " tiene $edad de edad";
    $nota1 = 10;
    $nota2 = 6;
    $nota3 = 9;
    echo "<br> $cadena3 sus notas fueron $nota1 , $nota2 , $nota3";
    // condicionales
    $valor = rand(1,10);
    if($valor <= 5) { 
        echo "Es menor o igual a 5";
    } else {
        echo "el valor sorteado es mayor a 5 y es el numero de $valor";
    }
    if ($valor <= 9) {
        echo "Tiene un dígito";
    } else {
        if ($valor < 100) {
            echo "Tiene 2 dígitos";
        } else {
            echo "Tiene 3 dígitos";
        }
    }
    // estructura repetitivas
    for ($i=0; $i < 10; $i++) { 
        echo "<br> $i <br>";
    }
    
    $valor = rand(1, 100);
    $inicio = 1;
    while ($inicio <= $valor) {
        echo $inicio;
        echo "<br>";
        $inicio++;
    }
     //Mostramos los números de los días del 1 a la fecha actual;
    $dia = date("d");
    $inicio = 1;
    while ($inicio <= $dia) {
        echo $inicio . "<br>";
        $inicio++;
    }
?>
</body>
</html>