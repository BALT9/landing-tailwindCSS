<?php

// require_once '../config/config.php';
require_once 'C:/xampp/htdocs/landing-tailwindcss/config/config.php';
class Usuario {
    private $id;
    private $nombre;
    private $correo;
    private $contraseña;

    public function __construct($id,$nombre,$correo,$contraseña)
    {
        $this->id = $id;
        $this->nombre = $nombre;
        $this->correo = $correo;
        $this->contraseña = $contraseña;
    }

    // Getter y Setter para los atributos
    public function getId() {
        return $this->id;
    }

    public function setId($id) {
        $this->id = $id;
    }

    public function getNombre() {
        return $this->nombre;
    }

    public function setNombre($nombre) {
        $this->nombre = $nombre;
    }
    public function getCorreo() {
        return $this->correo;
    }

    public function setCorreo($correo) {
        $this->correo = $correo;
    }

    public function getContraseña() {
        return $this->contraseña;
    }

    public function setContraseña($contraseña) {
        $this->contraseña = $contraseña;
    }

    // Método para registrar un nuevo usuario en la base de datos
    public function register(){
        global $pdo;

        // Verificar si el correo ya existe
        $sql = "SELECT * FROM usuarios WHERE correo = ?";
        $stmt = $pdo->prepare($sql);
        $stmt->execute([$this->correo]);
        if ($stmt->fetch()) {
            return false; // El email ya está registrado
        }

        // Insertar el nuevo usuario
        $sql = "INSERT INTO usuarios (nombre, correo, contraseña) VALUES (?, ?, ?)";
        $stmt = $pdo->prepare($sql);
        $stmt->execute([$this->nombre, $this->correo, $this->contraseña]);

        return true; // Registro exitoso
    }

    public function login() {
        global $pdo;
        
        // Buscar al usuario por email
        $sql = "SELECT * FROM usuarios WHERE correo = ?";
        $stmt = $pdo->prepare($sql);
        $stmt->execute([$this->correo]);
        $usuario = $stmt->fetch(PDO::FETCH_ASSOC);

        // Verificar si el usuario existe y la contraseña es correcta
        if ($usuario && $usuario['contraseña'] === $this->contraseña) {
            return $usuario;  // Retorna los datos del usuario si las credenciales son correctas
        }
        return null;  // Si las credenciales no coinciden
    }

    // Método estático para obtener un usuario por su ID
    public static function getById($id) {
        global $pdo;
        $sql = "SELECT * FROM usuarios WHERE id = ?";
        $stmt = $pdo->prepare($sql);
        $stmt->execute([$id]);
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }
}