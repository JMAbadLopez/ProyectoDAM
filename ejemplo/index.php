<?php

/** Conexión a la Base de Datos */
$mysql = new mysqli($host = 'localhost', $username = 'dam', $password = 'dam', $dbname = 'canciones');

if(!isset($_REQUEST['term'])) {

    $query = "SELECT * FROM cancion";
    
} else {

    $query = "SELECT * FROM cancion WHERE name LIKE '%{$_REQUEST['term']}%' OR artist_name LIKE '%{$_REQUEST['term']}%' OR album LIKE '%{$_REQUEST['term']}%'";
}

/** Ejecutar una consulta */
$result = $mysql->query($query);

/** Recorrer los registros de la consulta */
while ( $row = $result->fetch_row()) {

    foreach ($row as $column) {

        echo $column;

    }
}