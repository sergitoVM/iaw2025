<?php
$server = "localhost";
$user = "sergio";
$password = "Cruzcampo#123";
$database = "concesionario";

$conn = mysqli_connect($server, $user, $password, $database);
if (!$conn) {
    die("ConexiÃ³n fallida: " . mysqli_connect_error());
}

$matricula = $_POST['matricula'];  
$marca = $_POST['marca'];  
$modelo = $_POST['modelo'];  
$precio = $_POST['precio'];  

$stmt = $conn->prepare("INSERT INTO Vehiculos (Matricula, Marca, Modelo, Precio) VALUES (?, ?, ?, ?)");  
$stmt->bind_param("sssd", $matricula, $marca, $modelo, $precio);  

if ($stmt->execute()) {  
    echo "Nuevo vehículo registrado correctamente. <a href='form_compra.php'>Ir a registrar compra</a>";  
} else {  
    echo "Error: " . $stmt->error;  
}  

$stmt->close();  
$conn->close();  
?>