<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Variables</title>
</head>
<body>
    <?php
        $nombre = "Sergio";
        echo "Me llamo " . "<b>" . $nombre . "</b>";
        echo "<br>";
        var_dump($nombre);
        echo "<br>";
        echo "<br>";

        $salario = "1000";
        echo "Cobro" . "<b>" . $salario . "</b>";
        echo "<br>";
        var_dump($salario);
        echo "<br>";
        echo "<br>";
        
        $lluvia = true;
        echo "Hoy llueve " . "<b>" . $lluvia . "</b>";
        echo "<br>";
        var_dump($lluvia);
        echo "<br>";
        echo "<br>";
        
        $localidad = "sevilla";
        echo "Vivo en " . "<b>" . $localidad . "</b>";
        echo "<br>";
        var_dump($localidad); 
    ?>
</body>
</html>