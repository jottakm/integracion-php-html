<?php
$condicion = false;
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Condicionales</title>
</head>

<body>
    <h1>Forma 1</h1>
    <?php
    // if($condicion == true)
    if ($condicion) {
        echo "<b>La condición es verdadero</b>";
    } else {
        echo "<i>La condición es falso</i>";
    }

    ?>


    <h1>Forma 2</h1>
    <?php if ($condicion) { ?>
        <b>La condición es verdadero</b>
    <?php } else { ?>
        <i>La condición es falso</i>
    <?php } ?>

    <h1>Forma 3</h1>
    <?php if ($condicion) : ?>
        <b>La condición es verdadero</b>
    <?php else : ?>
        <i>La condición es falso</i>
    <?php endif; ?>

</body>

</html>