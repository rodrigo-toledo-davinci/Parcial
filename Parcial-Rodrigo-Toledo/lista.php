<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    

    <?php

    $minimo=$_POST['minimo'];
    $maximo=$_POST['maximo'];

    echo'<h1>Hola, esta es la tabla de números que pediste</h1>';

    echo "<table>";
    echo "<tr>";
    for($i = $minimo; $i <=$maximo; $i++) {
        echo "<th>".$i."</th>";
    }
    echo "</tr>";


    for($x = $minimo; $x <=$maximo; $x++) {
        echo "<tr>";
        for ($y = $minimo; $y <=$maximo; $y++) {
            echo "<td>",($x*$y),"</td>";
        }
        echo "</tr>";
    }
    echo "</table>";

    ?>

<a href="index.php">Volver al inicio</a>

</body>
</html>