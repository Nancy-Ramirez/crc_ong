<?php
$host = 'localhost';
$db = 'nombre_ong';
$user = 'admin';
$pass = 'admin';
$port = 3307; // En tu caso es 3306

$conn = new mysqli($host, $user, $pass, $db, $port);
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}
?>