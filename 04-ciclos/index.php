<?php
$usuarios = ['Juan', 'Carlos', 'Daniel', 'Maria'];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ciclos</title>
</head>

<body>

    <ul>
        <?php for ($i = 1; $i <= 10; $i++) : ?>
            <li><?= $i ?></li>
        <?php endfor; ?>
    </ul>

    <ul>
        <?php
        $contador = 1;
        while ($contador <= 10) :
        ?>
            <li><?= $contador ?></li>
            <?php $contador += 1 ?>
            <?php //$contador = $contador +  1; 
            ?>
        <?php endwhile; ?>
    </ul>

    <ul>
        <?php foreach ($usuarios as $usuario) : ?>
            <li><?= $usuario ?></li>
        <?php endforeach; ?>
    </ul>

</body>

</html>