<?php
$suma = 0;
for ($i = 5; $i <= 100; $i += 5) {
    echo "$i ";
    $suma += $i;
}
$cuadradoSuma = $suma * $suma;
echo "$cuadradoSuma";
?>