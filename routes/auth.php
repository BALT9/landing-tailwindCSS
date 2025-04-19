<?php

require_once 'C:/xampp/htdocs/landing-tailwindcss/controllers/AuthController.php';

$authController = new AuthController();

if ($_SERVER['REQUEST_URI'] === '/landing-tailwindcss/register' && $_SERVER['REQUEST_METHOD'] === 'POST') {
    $authController->register();
}

if ($_SERVER['REQUEST_URI'] === '/landing-tailwindcss/login' && $_SERVER['REQUEST_METHOD'] === 'POST') {
    $authController->login();
}