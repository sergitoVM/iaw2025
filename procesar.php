<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = htmlspecialchars($_POST['nombre']);
    $baguettes = intval($_POST['baguettes']);
    $panecillos = intval($_POST['panecillos']);
    $pan_molde = intval($_POST['pan_molde']);

    echo "<h2>Resumen del Pedido</h2>";
    echo "<p><strong>Nombre:</strong> $nombre</p>";
    echo "<ul>";
    if ($baguettes > 0) echo "<li>Baguettes: $baguettes</li>";
    if ($panecillos > 0) echo "<li>Panecillos: $panecillos</li>";
    if ($pan_molde > 0) echo "<li>Pan de Molde: $pan_molde</li>";
    echo "</ul>";
    echo "<p>¡Gracias por su compra!</p>";
}

if ($_SERVER["REQUEST_METHOD"] == "GET") {
    echo "<h2>Pedido realizado exitosamente. ¡Gracias!</h2>";
}
?>
