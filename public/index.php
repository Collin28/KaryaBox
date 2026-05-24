<?php
// public/index.php

// Jalankan session di awal agar aman untuk proses login nanti
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

// Gunakan __DIR__ agar PHP mencari folder secara absolut dan akurat dari posisi file ini
require_once __DIR__ . '/../app/core/Controller.php';
require_once __DIR__ . '/../app/core/Database.php';
require_once __DIR__ . '/../app/core/Router.php';

use App\Core\Router;

$router = new Router();

// Daftar Rute Bersih (karena subfolder sudah diurus otomatis oleh Router.php)
$router->add('GET', '/', 'AuthController', 'login');
$router->add('POST', '/', 'AuthController', 'authenticate');

$router->add('GET', '/admin/login', 'AuthController', 'login');
$router->add('POST', '/admin/login', 'AuthController', 'authenticate');

// Jalankan Router
$router->run();
?>