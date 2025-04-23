<?php
// echo 'controlador: ' . __DIR__;
// require_once '../models/Usuario.php';
require_once 'C:/xampp/htdocs/landing-tailwindcss/models/Usuario.php';
echo 'aqui estoy';
var_dump($_POST);  // Verifica los datos que llegan

class AuthController
{
    // Método para registrar un nuevo usuario
    public function register()
    {
        echo 'llegue aqui mi pana';
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            // Obtener los datos enviados por el formulario
            $nombre = $_POST['nombre'] ?? '';
            $correo = $_POST['correo'] ?? '';
            $contraseña = $_POST['contraseña'] ?? '';

            // Verificar si los datos no están vacíos
            if (empty($nombre) || empty($correo) || empty($contraseña)) {
                echo json_encode(['message' => 'Todos los campos son requeridos.']);
                return;
            }

            // Crear una instancia del modelo Usuario
            $usuario = new Usuario(null, $nombre, $correo, $contraseña);
            // Intentar registrar el usuario
            if ($usuario->register()) {
                echo json_encode(['message' => 'Usuario registrado exitosamente.']);
                header('location: ./pages/perfil.php');
            } else {
                echo json_encode(['message' => 'El correo ya está registrado.']);
            }
        } else {
            echo json_encode(['message' => 'Método HTTP no permitido.']);
        }
    }

    // Método para hacer login
    public function login(){
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            // Obtener los datos enviados por el formulario
            $correo = $_POST['correo'] ?? '';
            $contraseña = $_POST['contraseña'] ?? '';

            // Verificar si los datos no están vacíos
            if (empty($correo) || empty($contraseña)) {
                echo json_encode(['message' => 'Todos los campos son requeridos.']);
                return;
            }

            // Crear una instancia del modelo Usuario
            $usuario = new Usuario(null, null, $correo, $contraseña);
            // Intentar hacer login
            $usuario = $usuario->login();
            if ($usuario) {
                echo json_encode(['message' => 'Login exitoso.', 'usuario' => $usuario]);
                header('location: ./pages/perfil.php');
            } else {
                echo json_encode(['message' => 'Correo o contraseña incorrectos.']);
            }
        }else {
            echo json_encode(['message' => 'Método HTTP no permitido.']);
        }
    }
}
