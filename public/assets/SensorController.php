<?php
require_once '../config/config.php';
// controllers/UserController.php

class UserController {
    public function login() {
        // Verificar si el formulario fue enviado mediante POST
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $username = $_POST['username'];
            $password = $_POST['password'];

            // Variables fijas para demostración
            $fixedUsername = 'admin';
            $fixedPassword = '12345';

            if (($username === $fixedUsername && $password === $fixedPassword)) {
                // Iniciar sesión y redirigir al usuario
                session_start();
                $_SESSION['username'] = $username;
                header('Location: index.php');
                exit;
            } else {
                // Mostrar mensaje de error
                echo "Usuario o contraseña incorrectos.";
            }
        }
    }
}



?>