<?php
$suma = 0;
for ($i = 1; $i <= 100; $i++) {
    if ($i % 2 == 0) {
        echo "$i ";
        $suma += $i;
    }
}
echo "<br>Suma total: $suma";
?>