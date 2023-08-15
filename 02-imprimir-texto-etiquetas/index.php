<?php

$nombre = "Cursos Posgrado";

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Imprime texto y etiquetas con PHP</title>
</head>
<body>
    <?php echo "<b>Hola amigos, estoy aprendiendo a integrar php con html</b> <br>";?>
    
    <?= "<i>Esta es otra forma de imprimir texto y etiquetas con PHP</i>" ?>
    <h3><?= "Hola, $nombre" ?></h3>
</body>
</html>