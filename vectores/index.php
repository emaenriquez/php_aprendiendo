<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
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
</body>
</html>