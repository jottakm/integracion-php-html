<?php

echo "<pre>";
var_dump($_POST);

$nombre = $_POST['nombre'];
$edad   = $_POST['edad'];

echo "El usuario es: $nombre tiene $edad años. ";
