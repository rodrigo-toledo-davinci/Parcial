<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <h1>Bienvenido al sitio</h1>

    <form action="result.php" method="post">

        <div>
        <label for="">Nombre:</label>
        <input type="text" name="nombre">
        </div>

        <div>
        <label for="">Apellido:</label>
        <input type="text" name="apellido">
        </div>

        <div>
        <label for="">Edad:</label>
        <input type="number" name="edad">
        </div>

        <div>
        <label for="">DNI:</label>
        <input type="number" name="dni">
        </div>

        <div>
        <button type="submit">Enviar</button>

        </div>


    </form>


</body>
</html>