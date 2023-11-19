
<?php

session_start();
ob_start();


$_SESSION['saludo'] = "Hola, cómo estás". '<br>';
$_SESSION['numero'] = 50 . '<br>';
$_SESSION['apellido'] = true . '<br>';
$_SESSION['mascota'] = "perro" . '<br>';
$_SESSION['amigos'] = array("paco", "lucia", "alex");

//Ejemplo de objeto
$aficiones = (object)[
    'deporte' => 'nadar',
    'cine' => 'terror'
];

$_SESSION['aficiones'] = serialize($aficiones);

//Ejemplo de clase

class Usuario {
    public $nombre;
    public $edad;

    public function __construct($nombre, $edad){
        $this->nombre = $nombre;
        $this->edad = $edad;
    }

    public function presentarse($madre){
        echo "Hola, soy {$this->nombre} y tengo {$this->edad} años. Mi madre se llama {$madre}. <br>";
    }
}

$alumno = new Usuario("Alex", 32);
$_SESSION['alumno']= serialize($alumno);

$profesor = new Usuario ("Paco", 55);
$_SESSION['profesor']= serialize($profesor);



?>