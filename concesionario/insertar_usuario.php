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


$dni = $_POST['dni'];  
$nombre = $_POST['nombre'];  
$apellidos = $_POST['apellidos'];  
$telefono = $_POST['telefono'];  
$correo = $_POST['correo'];  

$stmt = $conn->prepare("INSERT INTO Usuarios (DNI, Nombre, Apellidos, Telefono, Correo_Electronico) VALUES (?, ?, ?, ?, ?)");  
$stmt->bind_param("sssss", $dni, $nombre, $apellidos, $telefono, $correo);  

if ($stmt->execute()) {  
    echo "Nuevo usuario registrado correctamente. <a href='form_compra.php'>Ir a registrar compra</a>";  
} else {  
    echo "Error: " . $stmt->error;  
}  

$stmt->close();  
$conn->close();  
?>  