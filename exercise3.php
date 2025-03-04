<?php
$i = 1;
$suma = 0;
while ($i <= 50) {
    $cuadrado = $i * $i;
    echo "El cuadrado de $i es: $cuadrado";
    echo "<br>";
    $suma += $cuadrado;
    $i++;
}
echo "Suma total: $suma";
?>