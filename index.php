<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
    
    // function mostrarTitulo($men){
    //     echo "<h1 style=\"text-align:center\">";
    //     echo $men;
    //     echo "</h1>";
    // }

    // mostrarTitulo('Hola mundo');
    // echo '<br>';
    // mostrarTitulo('Hola')

    function calcularPromedio($valor1,$valor2){
        $pro = $valor1 / $valor2;
        return $pro;
    }

    $v1 = 100;
    $v2 = 50;

    $p = calcularPromedio($v1,$v2);

    echo $p;

    ?>
</body>
</html>