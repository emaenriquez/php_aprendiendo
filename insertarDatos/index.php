<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Alta de alumnos</h1>
    <form method="post" action="pagina.php">
        ingrese nombre:
        <input type="text" name="nombre">
        <br>
        ingrese email:
        <input type="email" name="mail">
        <br>
        selecciones cursos
        <select name="codigocurso">
            <option value="1">PHP</option>
            <option value="2">ASP</option>
            <option value="3">JSP</option>
        </select>
        <input type="submit" name="confirmacion">
    </form>
</body>
</html>