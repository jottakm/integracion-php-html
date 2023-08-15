<?php

$nombre = $_POST['nombre'];
$usuario = $_POST['usuario'];
$correo = $_POST['correo'];

$html = htmlentities($nombre);

$soloLetras = preg_replace("/\d/", '', $usuario);
$soloNumeros = preg_replace("/\D/", '', $usuario);


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <p>Nombre</p>
    <p><?= $nombre ?></p>
    <p><?= $html ?></p>

    <p>Usuario</p>
    <p><?= $usuario ?></p>
    <p><?= $soloLetras ?></p>
    <p><?= $soloNumeros ?></p>

</body>
</html>