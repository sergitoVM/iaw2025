<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Panaderia La Geltrú</title>
</head>

<body>
    <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $cliente = htmlspecialchars($_POST['cliente']);
        $baguetes = htmlspecialchars($_POST['baguetes']);
        $rolls = htmlspecialchars($_POST['rolls']);
        $sandwich_bread = htmlspecialchars($_POST['sandwich_bread']);
        echo "<h2>Datos recibidos por POST:</h2>";
        echo "<p>Cliente: $cliente </p><br>";
        echo "<p>Baguetes: $baguetes </p><br>";
        echo "<p>Rolls: $rolls </p><br>";
        echo "<p>Sandwich bread: $sandwich_bread </p><br>";
    }
    if ($_SERVER["REQUEST_METHOD"] == "GET") {
        $cliente = htmlspecialchars($_GET['cliente']);
        $baguetes = intval($_GET['baguetes']);
        $rolls = intval($_GET['rolls']);
        $sandwich_bread = intval($_GET['sandwich_bread']);
        echo "<h2>Datos recibidos por GET:</h2>";
        echo "<p>Cliente: $cliente </p><br>";
        echo "<p>Baguetes: $baguetes </p><br>";
        echo "<p>Rolls: $rolls </p><br>";
        echo "<p>Sandwich bread: $sandwich_bread </p><br>";
    }
    ?>
    
</body>

</html>