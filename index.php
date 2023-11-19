<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    // session_start();
    // ob_start();
    require 'variables-globales.php';
    echo $_SESSION['saludo'];
    echo $_SESSION['numero'];
    echo $_SESSION['apellido'];
    echo $_SESSION['mascota'];
    echo $_SESSION['amigos'][1].'<br>';

    $aficionesRecuperadas = unserialize($_SESSION['aficiones']);
    echo $aficionesRecuperadas->deporte . '<br>';

    $usuarioRecuperado = unserialize($_SESSION['usuario']);
    echo $usuarioRecuperado->presentarse();
    ?>
</body>
</html>