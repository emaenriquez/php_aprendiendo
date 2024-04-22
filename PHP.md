


# bases de php 

```php
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
```

# formulario
index.php
```php
    <form action="pagina.php" method="post">
        Ingrese nombre:<input type="text" name="nombre"><br>
        Ingrese su curriculum:<br>
        <textarea name="curriculum"></textarea>
        <br>
        <input type="submit" value="Confirmar">
    </form>
```
pagina.php
```php
    <?php
        echo "El nombre ingresado:" . $_REQUEST['nombre'];
        echo "<br>";
        echo "El curriculum:" . $_REQUEST['curriculum'];
    ?>
```

## formulario con control radio
index.php
```php
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
```
pagina2.php
```php
    if(isset($_REQUEST['nombre'])){
        echo $_REQUEST['nombre'];
        echo "<br>";
    }

    if(isset($_REQUEST['radio1'])) {
        if ($_REQUEST['radio1'] == "sin") {
            echo "Sin estudios.";
        }
        if ($_REQUEST['radio1'] == "primario") {
              echo "Estudios primarios.";
        }
        if ($_REQUEST['radio1'] == "secundario") {
            echo "Estudios secundarios.";
        }
    }
```
## formulario con control check box
index.php
```php
    <form action="pagina2.php" method="post">
        ingrese valor:
        <input type="text" name="valor1">
        <br>
        ingrese segundo valor:
        <input type="text" name="valor2">
        <br>
        <input type="checkbox" name="check1">sumar
        <br>
        <input type="checkbox" name="check2">restar
        <br>
        <input type="submit" name="operar">
    </form>
```
pagina2.php
```php
    <?php 
    
    if(isset($_REQUEST['check1'])){
        $suma = $_REQUEST['valor1'] + $_REQUEST['valor2'];
        echo "la suma es: " . $suma . "<br>";
    }

    if(isset($_REQUEST['ckeck2'])){
        $restar = $_REQUEST['valor1'] - $_REQUEST['valo2'];
        echo "La resta es:" . $restar;
    }
    
    ?>
```

## formulario con control select

```php
    <?php
        if ($_REQUEST['operacion'] == "suma") {
            $suma = $_REQUEST['valor1'] + $_REQUEST['valor2'];
            echo "La suma es:" . $suma;
        } else {
            if ($_REQUEST['operacion'] == "resta") {
                $resta = $_REQUEST['valor1'] - $_REQUEST['valor2'];
                echo "La resta es:" . $resta;
            }
        }
    ?>
```

# Vectores

```php
    <?php 
        $name[] = 'ema';
        $name[] = 'ricardo';
        $name[] = 'matias';

        for ($i=0; $i < count($name); $i++) { 
            echo $name[$i];
            echo '<br>';
        }

        foreach ($name as $names) {
            echo $names;
            echo '<br>';
        }
    ?>
```

# creacion de archivos con php

```php
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
```

# leer archivos
```php
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
```

# vectores asociativos
```php
    <?php 
    
        $articulo = array(
            'codigo' => 1,
            'descripcion' => 'manzanas',
            'precio' => 30.34
        );

        foreach ($articulo as $key => $value) {
            echo 'la clave es: '. $key . 'y su valor es: '. $value;
            echo '<br>';
        }
    ?>
```

# funciones 
```php
    <?php 
        
        function mostrarTitulo($men){
            echo "<h1 style=\"text-align:center\">";
            echo $men;
            echo "</h1>";
        }

        mostrarTitulo('Hola mundo');
        echo '<br>';
        mostrarTitulo('Hola')

        // 
        function calcularPromedio($valor1,$valor2){
            $pro = $valor1 / $valor2;
            return $pro;
        }

        $v1 = 100;
        $v2 = 50;

        $p = calcularPromedio($v1,$v2);

        echo $p;

    ?>
```

# insetar datos en una base de datos MySql
## INSERT (Alta de registros en una tabla)
index.php
```php
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
```

```php
    <?php 
        // puerto,usuario,contraseña,base de datos
        $conexion = mysqli_connect("localhost","root","","prueba") or
        die("problema en la conexion");

        mysqli_query($conexion, "insert into alumnos(nombre,mail,codigocurso) values 
        ('$_REQUEST[nombre]','$_REQUEST[mail]',$_REQUEST[codigocurso])")
        or die("Problemas en el select" . mysqli_error($conexion));

        mysqli_close($conexion);

        echo "fue dada de alta el alumno" 
    ?>
```

## Listado (selección de registros de una tabla)
```php
    <?php
        $conexion = mysqli_connect("localhost", "root", "", "base1") or
    die("Problemas con la conexión");

  $registros = mysqli_query($conexion, "select codigo,nombre,mail,codigocurso
                        from alumnos") or
    die("Problemas en el select:" . mysqli_error($conexion));

  while ($reg = mysqli_fetch_array($registros)) {
    echo "Codigo:" . $reg['codigo'] . "<br>";
    echo "Nombre:" . $reg['nombre'] . "<br>";
    echo "Mail:" . $reg['mail'] . "<br>";
    echo "Curso:";
    switch ($reg['codigocurso']) {
      case 1:
        echo "PHP";
        break;
      case 2:
        echo "ASP";
        break;
      case 3:
        echo "JSP";
        break;
    }
    echo "<br>";
    echo "<hr>";
  }

  mysqli_close($conexion);
  ?>
```

## consulta

```php
    <?php 
    
        $conexion = mysqli_connect("localhost", "root", "", "prueba") or
        die("Problemas con la conexión");

        $registrosAlumnos = mysqli_query($conexion, "select codigo,nombre,mail,codigocurso from alumnos") or
        die("Problemas en el select:" . mysqli_error($conexion));

        $registrosCursos = mysqli_query($conexion, "select codigo,nombrecurso from base1") or
        die("Problemas en el select:" . mysqli_error($conexion));

        while ($reg = mysqli_fetch_array($registrosAlumnos)) {
            echo "Codigo:" . $reg['codigo'] . "<br>";
            echo "Nombre:" . $reg['nombre'] . "<br>";
            echo "Mail:" . $reg['mail'] . "<br>";
            echo "Curso:";
            switch ($reg['codigocurso']) {
                case 1:
                  echo "PHP";
                  break;
                case 2:
                  echo "ASP";
                  break;
                case 3:
                  echo "JSP";
                  break;
            }
            echo "<br>";
            echo "<hr>";
        }

        while($reg = mysqli_fetch_array($registrosCursos)){
            echo "Codigo:" . $reg['codigo'] . "<br>";
            echo "Nombre:" . $reg['nombrecurso'] . "<br>";
            echo "<br>";
            echo "<hr>";
        }

        mysqli_close($conexion);
    ?>
```

## borrar un registo de la tabla 
index.php
```php
    <form method="post" action="pagina.php">
        email para borrar en la base de datos:
        <input type="text" name="mail">
        <br>
        <input type="submit" value="buscar y borrar">
    </form>
```
pagina.php
```php
    <?php 

    $conexion =mysqli_connect("localhost","root","","prueba") or die('nose pudo conectar a la base de datos');

    $consulta = mysqli_query($conexion,"select codigo from alumnos where mail='$_REQUEST[mail]'")
    or die('problemacion con el select: '. mysqli_error($conexion));


    if($red = mysqli_fetch_array($consulta)){
        mysqli_query($conexion,"delete codigo from alumnos where mail='$_REQUEST[mail]'")
        or die('problemacion con la elimincacion del email: '. mysqli_error($conexion));
        echo('usuario eliminado');
    } else {
        echo 'email no encontrado';
    }
    
    ?>
```

## borrar todos los registro de una tabla

```php
    <?php 
    
    $conexion = mysqli_connect("localhost","root","","prueba") or die("problemas en la conexicion a la bd");
    
    mysqli_query($conexion,"delete from alumnos") or die("problemas con el select". mysqli_error($conexion));

    echo "se encontro la tabla y ya esta borrada";

    mysqli_close($conexion);

    ?>
```
## update modificacion de un registo de la tabla
index.php
```php
    <form action="pagina2.php" method="post">
        Ingrese el mail del alumno:
        <input type="text" name="mail"><br>
        <input type="submit" value="buscar">
    </form>
```
pagina2.php
```php
    <?php

    $conexion = mysqli_connect("localhost", "root", "", "prueba") or die("Problemas con la conexión");

    $registros = mysqli_query($conexion, "select * from alumnos where mail='$_REQUEST[mail]'") or 
    die("Problemas en el select:" . mysqli_error($conexion));
    
    if ($reg = mysqli_fetch_array($registros)) {

    } else
      echo "No existe alumno con dicho mail";
    ?>

    <form action="pagina3.php" method="post">
        Ingrese nuevo mail:
        <input type="text" name="mailnuevo" value="<?php echo $reg['mail'] ?>">
        <br>
        <input type="hidden" name="mailviejo" value="<?php echo $reg['mail'] ?>">
        <input type="submit" value="Modificar">
    </form>
```
pagina3.php
```php
    <?php
        $conexion = mysqli_connect("localhost", "root", "", "prueba") or die("Problemas con la conexión");

        mysqli_query($conexion, "update alumnos set mail='$_REQUEST[mailnuevo]' where mail='$_REQUEST[mailviejo]'") or
        die("Problemas en el select:" . mysqli_error($conexion));

        echo "El mail fue modificado con exito";
    ?>
```
## insertar datos en una tabla
index.php
```php
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
```
pagina.php
```php
    <?php 
    
    $conexion = mysqli_connect("localhost","root","","prueba") or
    die("problema en la conexion");

    mysqli_query($conexion, "insert into alumnos(nombre,mail,codigocurso) values 
    ('$_REQUEST[nombre]','$_REQUEST[mail]',$_REQUEST[codigocurso])")
    or die("Problemas en el select" . mysqli_error($conexion));
    
    mysqli_close($conexion);

    echo "fue dada de alta el alumno"
    
    ?>
```

## inner join (seleccion de registro de varias tablas)
index.php
```php
    $conexion = mysqli_connect("localhost", "root", "", "base1") or
    die("Problemas con la conexión");

    $registros = mysqli_query($conexion, "select alu.codigo as codigo,
        nombre,mail,codigocurso,nombrecurso from alumnos as alu inner join cursos as cur on cur.codigo=alu.codigocurso") or
    die("Problemas en el select:" . mysqli_error($conexion));

    while ($reg = mysqli_fetch_array($registros)) {
        echo "Codigo:" . $reg['codigo'] . "<br>";
        echo "Nombre:" . $reg['nombre'] . "<br>";
        echo "Mail:" . $reg['mail'] . "<br>";
        echo "Curso:" . $reg['nombrecurso'] . "<br>";
        echo "<hr>";
    }
    mysqli_close($conexion);
```

## Función count de SQL

```php
    <?php
    
        $conexion = mysqli_connect("localhost","root","","prueba") or die("problema en la conexion");

        $registro = mysqli_query($conexion, "select (*) as cantiadad from base1") or die("problema
        en la consulta" . mysqli_error($conexion));

        $reg = mysqli_fetch_array($registro);

        echo "la cantidad de registros es: " . $reg['cantiadad'];

    ?>
```

## update(Modificación de un registro trabajando con dos tablas)
index.php
```php
    <?php 
    
        $conexion = mysqli_connect("localhost","root","","prueba") or die("problema en la conexion");

        $registro = mysqli_query($conexion, "select (*) as cantiadad from base1") or die("problema
        en la consulta" . mysqli_error($conexion));

        $reg = mysqli_fetch_array($registro);

        echo "la cantidad de registros es: " . $reg['cantiadad'];

    ?>
```
pagina2.php
```php
    <?php
        $conexion = mysqli_connect("localhost", "root", "", "base1") or die("Problemas con la conexión");

        $registros = mysqli_query($conexion, "select * from alumnos where mail='$_REQUEST[mail]'") or
        die("Problemas en el select:" . mysqli_error($conexion));

        if ($regalu = mysqli_fetch_array($registros)) {

    ?>
    <form action="pagina3.php" method="post">
        <input type="hidden" name="mailviejo" value="<?php echo $regalu['mail'] ?>">
        <select name="codigocurso">
            <?php
                $registros = mysqli_query($conexion, "select * from cursos") or
                    die("Problemas en el select:" . mysqli_error($conexion));
                while ($reg = mysqli_fetch_array($registros)) {
                    if ($regalu['codigocurso'] == $reg['codigo'])
                        echo "<option value=\"$reg[codigo]\" selected>$reg[nombrecurso]</option>";
                    else
                        echo "<option value=\"$reg[codigo]\">$reg[nombrecurso]</option>";
                }
            ?>
        </select>
        <br>
        <input type="submit" value="Modificar">
    </form>
    
    <?php
    } else
        echo "No existe alumno con dicho mail";
    ?>
```
pagina3.php
```php
    <?php 
        $conexion = mysqli_connect("localhost", "root", "", "base1") or die("Problemas con la conexión");

        $registros = mysqli_query($conexion, "update alumnos
        set codigocurso=$_REQUEST[codigocurso] where mail='$_REQUEST[mailviejo]'") or die("Problemas en el select:" . mysqli_error($conexion));

        echo "El curso fue modificado con exito";
    ?>
```

## Cláusula Group By de SQL.
```php
<?php

        $conexion = mysqli_connect("localhost", "root", "", "prueba") or die("problema en la conexion");

        $registro = mysqli_query($conexion, "select count(alu.codigo) as cantidad, nombrecurso 
        from alumnos as alu inner join cursos as cur on cur.codigo=alu.codigocurso group by alu.codigocurso") or die("problema" . mysqli_error($conexion));

        while($reg = mysqli_fetch_array($registro)){
            echo "el nombre del curso: ". $reg['nombrecurso'] . "<br>";
            echo "Cantidad de registro: ". $reg['cantidad'] . "<br>";
            echo "<br>";
        }

        mysqli_close($conexion);
    ?>
```

# Parámetros en un hipervínculo.
index.php
```php
    <?php 
    
    // $nombre = "Carlos";
    // $edad = 32;

    // echo '<a href="pagina2.php?nombre=' . $nombre . '&edad=' . $edad . '">ir a pagina del destino</a>';

    echo '<a href="pagina2.php?tabla=2">tabla de multiplicar 2</a>';

    echo '<a href="pagina2.php?tabla=3">tabla de multiplicar 3</a>';

    echo '<a href="pagina2.php?tabla=5">tabla de multiplicar 5</a>';

    ?>
```
pagina2.php
```php
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
```
# diferencias entre $_Request y $_Get

$_GET: Esta superglobal se utiliza para recoger datos enviados a través de la URL utilizando el método GET. Cuando se hace clic en un enlace o se envía un formulario con el método GET, los datos se adjuntan a la URL y están disponibles en el array $_GET. 
$_REQUEST: Esta superglobal recoge datos tanto de la URL (a través de GET) como de los datos enviados a través de formularios (a través de POST), así como de las cookies. es más amplio en términos de los tipos de datos que puede recoger, ya que puede recoger datos de múltiples fuentes. Sin embargo, debido a esta amplitud, el uso de $_REQUEST puede ser menos seguro en ciertos casos, ya que cualquier script externo puede enviar datos a través de un formulario POST y afectar al script que recibe esos datos.


# parametros en un hipervinculo
index.php
```php
<?php 
    
    // $nombre = "Carlos";
    // $edad = 32;

    // echo '<a href="pagina2.php?nombre=' . $nombre . '&edad=' . $edad . '">ir a pagina del destino</a>';

    echo '<a href="pagina2.php?tabla=2">tabla de multiplicar 2</a>';

    echo '<a href="pagina2.php?tabla=3">tabla de multiplicar 3</a>';

    echo '<a href="pagina2.php?tabla=5">tabla de multiplicar 5</a>';

    ?>
</body>
```
pagina2.php
```php
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
```

# php es gradual (var_dump & gettype)