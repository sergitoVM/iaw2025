<?php
require 'conexion.php';
$result = mysqli_query($conn, "SELECT * FROM libros");
while ($row = mysqli_fetch_assoc($result)) {
    echo "ID: " . $row['id'] . " - TÃ­tulo: " . $row['titulo'] . " - Autor: " . $row['autor'] . " - Disponible: " . ($row['disponible'] ? "SÃ­" : "No") . "<br>";
}
?>