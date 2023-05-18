<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Música</title>
</head>
<body>
    <h1>Nueva canción</h1>
    <form action="nueva.php" method="post">
        <label for="nombre">Título:</label><br>
        <input type="text" name="nombre" required><br>
        <label for="artista">Artista:</label><br>
        <input type="text" name="artista" required><br>
        <label for="album">Álbum:</label><br>
        <input type="text" name="album" required><br>
        <label for="ano_publicacion">Año de publicación:</label><br>
        <input type="number" name="ano_publicacion" required><br><br>
        <input type="submit" value="Guardar">
    </form>
    <br>
<!-- Script en PHP -->
<?php

/** Conexión a la Base de Datos */
$mysql = new mysqli($host = 'localhost', $username = 'dam', $password = 'dam', $dbname = 'musica');

if( !isset($_REQUEST['nombre']) &&
    !isset($_REQUEST['artista']) &&
    !isset($_REQUEST['album']) &&
    !isset($_REQUEST['ano_publicacion'])) {

    echo "<h5>Rellena el formulario para insertar una nueva canción</h5>";
    
} else {
    /** Preparamos el INSERT */
    $query = "INSERT INTO cancion (nombre, artista, album, ano_publicacion) VALUES ( '{$_REQUEST['nombre']}', '{$_REQUEST['artista']}', '{$_REQUEST['album']}', {$_REQUEST['ano_publicacion']})";

    /** Ejecutamos la inserción */
    $mysql->query($query);

    echo "<h5>Canción insertada correctamente</h5>";
}

?>
</body>
</html>
