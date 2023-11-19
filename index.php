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
    //Instancio un objeto
    $aficionesRecuperadas = unserialize($_SESSION['aficiones']);
    echo $aficionesRecuperadas->deporte . '<br>';
    //Instancio una clase
    $usuarioRecuperado = unserialize($_SESSION['alumno']);
    $usuarioRecuperado->presentarse("Dolores");
    $usuarioRecuperado->presentarse("María");
    //Vuelvo a instanciar la clase
    $profesorRecuperado = unserialize($_SESSION['profesor']);
    $profesorRecuperado ->presentarse("Clotilda");
    ?>
</body>
</html>