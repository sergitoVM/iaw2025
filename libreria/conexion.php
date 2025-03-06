<?php
$server = "localhost";
$user = "root";
$password = "";
$database = "biblioteca";

$conn = mysqli_connect($server, $user, $password, $database);
if (!$conn) {
    die("ConexiÃ³n fallida: " . mysqli_connect_error());
}
?>