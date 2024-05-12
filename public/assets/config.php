<?php
// Configuración de la conexión a la base de datos
$host = 'localhost';
$dbname = 'sistema_agua_pluvial'; // Reemplaza 'nombre_de_tu_base_de_datos' con el nombre real de tu base de datos
$user = 'root'; // Usuario por defecto de XAMPP
$password = ''; // Contraseña por defecto de XAMPP

try {
    // Crear una nueva conexión PDO
    $conexion = new PDO("mysql:host=$host;dbname=$dbname", $user, $password);
    // Establecer el modo de error de PDO en excepción
    $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOException $e) {
    // Manejar errores de conexión
    echo "Error de conexión: " . $e->getMessage();
}

