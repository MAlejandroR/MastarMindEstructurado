<?php

session_start();


require_once "funciones.php";

ini_set("display_errors", true);
error_reporting(E_ALL);
$clave = $_SESSION['clave'] ?? null;
if (is_null($clave)) {
    header("Location:index.php?msj=Debes de iniciar el juego");
    exit();
}

$htmlClave = mostrar_clave($_SESSION['clave']);


//Leo el parámetro que me marca cuantas posiciones he acertado
//Si este valor es 4 es que lo he acertado, si no es que estoy aquí
//Porque ya he realizado el número de intentos máximos
$pos = $_GET['pos'] ?? 0;


//Me quedo con la jugada realizada (número de jugadas que es el tamaño del array)
$jugadas = sizeof($_SESSION['jugadas']) - 1;

//Muestro el mensaje
if ($pos == 4)
    $htmlResultado = "<h2>FELICIDADES ADIVINASTE LA CLAVE en " . ($jugadas + 1) . " JUGADAS</h2>";
else
    $htmlResultado = "<h2>DEMASIADOS INTENTOS.... PRUEBA DE NUEVO</h2>";

//Por curiosidad muestro las jugadas y la clave
$htmlResultado .= "<h3>Valor de la clave: </h3> $htmlClave <br /><hr />";
$htmlResultado .= obtener_listado_final_jugadas();


//       header("Refresh:8;URL=index.php");
?>


<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link rel="stylesheet" href="css/estilo.css" type="text/css">
</head>
<body>
<div class="containerIndex">
    <h1>RESULTADO DE TU PARTIDA</h1>

    <div class='final'>
        <?= "$htmlResultado" ?>
    </div>
    <div>

        <form action="index.php">
            <input type="submit" value="Volver Al index">
        </form>
    </div>

</div>
</body>
</html>
