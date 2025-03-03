<?php
function redondear($num) {
    $entero = (int)$num;
    $decimal = $num - $entero;
    return ($decimal >= 0.005) ? $entero + 1 : $entero;
}

$numero = 12.541;
echo "$numero pasa a " . redondear($numero);
?>
