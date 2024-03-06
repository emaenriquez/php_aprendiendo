<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
        
        // echo 'the name entered is: ';

        // echo $_REQUEST['name'];


        // if($_REQUEST['age'] >= 18) {
        //     echo ' is older';
        // } else {
        //     echo 'is under 18';
        // }

        // if($_REQUEST['radius_1'] == 'sum'){
        //     $operate = $_REQUEST['value_1'] + $_REQUEST['value_2'];
        //     echo "the sum is: $operate";
        // } else {
        //     if($_REQUEST['radius_1'] == 'subtract'){
        //         $subtract = $_REQUEST['value_1'] - $_REQUEST['value_2'];
        //         echo "the substract is: $subtract";
        //     }
        // }


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
        
       

    ?>  
</body>
</html>