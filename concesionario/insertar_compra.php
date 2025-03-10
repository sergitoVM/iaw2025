<?php
error_reporting(E_ALL);
ini_set('display_errors',1);
$server = "localhost";
$user = "sergio";
$password = "Cruzcampo#123";
$database = "concesionario";

$conn = mysqli_connect($server, $user, $password, $database);
if (!$conn) {
    die("ConexiÃ³n fallida: " . mysqli_connect_error());
}

$matricula = $_POST['matricula'];  
$dni = $_POST['dni'];  

$stmt = $conn->prepare("INSERT INTO Compras (Matricula, DNI) VALUES (?, ?)");  
$stmt->bind_param("ss", $matricula, $dni);  

if ($stmt->execute()) {  
    $precio_sql = $conn->prepare("SELECT Precio FROM Vehiculos WHERE Matricula = ?");  
    $precio_sql->bind_param("s", $matricula);  
    $precio_sql->execute();  
    $resultado = $precio_sql->get_result();  
    $vehiculo = $resultado->fetch_assoc();  

    if ($vehiculo) {  
        $precio = $vehiculo['Precio'];  
        echo "Compra registrada correctamente. <br>";  
        echo "Matrícula: " . $matricula . "<br>";  
        echo "DNI: " . $dni . "<br>";  
        echo "Precio del Vehículo: €" . number_format($precio, 2) . "<br>";  
    } else {  
        echo "No se encontró el vehículo con la matrícula proporcionada.";  
    }  
} else {  
    echo "Error: " . $stmt->error;  
}  

$stmt->close();  
$precio_sql->close();  
$conn->close();  
?> 