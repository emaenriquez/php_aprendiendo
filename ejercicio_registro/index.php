<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>pedido de pizzas via internet.</h1>
    <form action="registroPedido.php" method="post">
        nombre:
        <input type="text" name="nombre">
        direccion:
        <input type="text" name="direcion">
        Jamon y queso:[x]
        <input type="number" name="cantiadadJamonQueso">
        Napolitana:[x]
        <input type="number" name="cantiadadNapolitana">
        Muzzarella:[x]
        <input type="number" name="cantiadadMuzzarella">
        <input type="submit" value="registrar">
    </form>
</body>
</html>