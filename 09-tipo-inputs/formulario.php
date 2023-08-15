<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Otros tipos de Inputs</title>
</head>
<body>
    <form action="server.php" method="POST">
        <!-- input simple -->
        <!-- <label for="nombre">Nombre</label>
        <input type="text" name="nombre" id="nombre" /> -->

        <!-- Arreglos -->
        <!-- <label for="">Personas</label>
        <input type="text" name="personas[]">
        <input type="text" name="personas[]">
        <input type="text" name="personas[]"> -->
        
        <!-- Arreglos asociativos -->
        <label for="">Nombre</label>
        <input type="text" name="persona[nombre]">

        <label for="">correo</label>
        <input type="email" name="persona[correo]">

        <label for="">Edad</label>
        <input type="number" name="persona[edad]">

        <button>Enviar</button>
    </form>
</body>
</html>