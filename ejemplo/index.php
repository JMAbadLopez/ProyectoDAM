<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Música</title>
</head>
<body>
    <h1>Búsqueda de canciones</h1>
    <form action="index.php" method="get">
        <input type="text" name="term">
        <input type="submit" value="Buscar canción">
    </form>

    <h2>Resultados</h2>
    <br>
<!-- Script en PHP -->
<?php

/** Conexión a la Base de Datos */
$mysql = new mysqli($host = 'localhost', $username = 'dam', $password = 'dam', $dbname = 'musica');

if(!isset($_REQUEST['term'])) {

    $query = "SELECT * FROM cancion";
    
} else {

    $query = "SELECT * FROM cancion WHERE nombre LIKE '%{$_REQUEST['term']}%' OR artista LIKE '%{$_REQUEST['term']}%' OR album LIKE '%{$_REQUEST['term']}%'";
}

/** Ejecutar una consulta */
$result = $mysql->query($query);

/** Recorrer los registros de la consulta */
while ( $row = $result->fetch_assoc()) {
    printf("<i>%s</i> <strong>%s</strong> <i>%s</i> (%s)<br>", $row['id'], $row['nombre'], $row['artista'], $row['ano_publicacion']);
}

?>
</body>
</html>
