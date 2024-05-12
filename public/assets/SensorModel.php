<?php
require_once '../config/config.php';
class SensorModel {
    private $conexion;

    public function __construct($conexion) {
        $this->conexion = $conexion;
    }

    // Método para autenticar usuarios
    public function autenticarUsuario($email, $password) {
        $query = "SELECT * FROM sistema_agua_pluvial.usuarios WHERE email = :email";
        $stmt = $this->conexion->prepare($query);
        $stmt->execute(['email' => $email]);
        $usuario = $stmt->fetch(PDO::FETCH_ASSOC);

        if ($usuario && password_verify($password, $usuario['password'])) {
            return $usuario;
        }
        return false;
    }
}
?>
