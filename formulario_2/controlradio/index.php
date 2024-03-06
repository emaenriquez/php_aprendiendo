<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <!-- <form method="post" action="pagina2.php">
        enter your name
        <input type="text" name="name" placeholder="enter your name">
        <input type="text" name="age" placeholder="enter your date"> 
        <input type="submit" value="confirm">
    </form> -->

    <!-- <form method="post" action="pagina2.php">

        enter the first value

        <input type="text" name="value_1">
        
        enter the second value

        <input type="text" name="value_2">

        <input type="radio" name="radius_1" value="sum"> sum
        <br>
        <input type="radio" name="radius_1" value="subtract"> subtract

        <input type="submit" name="operate">

    </form> -->


    <form action="pagina2.php" method="post">
        Ingrese Nombre:
        <input type="text" name="nombre">
        <br>
        
        Estudios:
        <br>
        
        <input type="radio" name="radio1" value="sin">Sin estudios
        <br>
        
        <input type="radio" name="radio1" value="primario">Estudios primarios
        <br>
        
        <input type="radio" name="radio1" value="secundario">Estudios secundarios
        <br>
        
        <input type="submit" value="Confirmar">
    </form>

</body>
</html>