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
    
    $nombre=$_POST['nombre'];
    $apellido=$_POST['apellido'];
    $edad=$_POST['edad'];
    $dni=$_POST['dni'];


    if ($edad>18) {
        echo '<h1>Bienvenido'.$nombre.' '.$apellido.', es hora de jugar</h1>';
        echo('
            <form action="lista.php" method="post">

    <div>
        <label for="">Minimo:</label>
        <input type="number" name="minimo">
    </div>
    <div>
        <label for="">Maximo:</label>
        <input type="number" name="maximo">
    </div>
    <div>
        <button type="submit">Mostrar tabla</button>
    </div>


    </form>
        ');
    }elseif ($edad<18) {
        echo '<h1>Disculpa pero no tienes acceso</h1>';
    }

    ?>

    <a href="index.php">Volver al inicio</a>

</body>
</html>