<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Precision2</title>
</head>
<body>
<?php 
$a = 10; 
$b = 12; 
$acomparar = 7; 
if(abs($a-$b) < $acomparar) { 
    echo "El número " . "$acomparar" . " es mayor que la diferencia entre " . "$a" . " y " . "$b";}
else {
    echo "El número " . "$acomparar" . " es menor que la diferencia entre " . "$a" . " y " . "$b";
}
?>
</body>
</html>