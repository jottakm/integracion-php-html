<?php

echo "<pre>";
var_dump($_FILES);

$nombre = $_FILES['imagen']['name'];
echo $nombre . " ruta temporal : " . $_FILES['imagen']['tmp_name'] ;
