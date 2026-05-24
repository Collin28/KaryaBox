<?php
namespace App\Core;

class Router {
    private $routes = [];

    public function add($method, $path, $controller, $action) {
        $this->routes[] = [
            'method' => $method,
            'path' => $path,
            'controller' => $controller,
            'action' => $action
        ];
    }

    public function run() {
        $method = $_SERVER['REQUEST_METHOD'];
        $url = $_SERVER['REQUEST_URI'];

        // 1. Buang subfolder Laragon dari string URL
        $url = str_replace('/KARYABOX/public', '', $url);
        
        // 2. Potong query string jika ada tanda ? di URL
        $url = explode('?', $url)[0];
        
        // 3. Standarisasi format URL (Hapus slash di akhir jika bukan root '/')
        if ($url !== '/' && substr($url, -1) === '/') {
            $url = rtrim($url, '/');
        }
        
        // 4. Pastikan jika url kosong, setel ke '/'
        if (empty($url)) {
            $url = '/';
        }

        foreach ($this->routes ?? [] as $route) {
            if ($route['method'] === $method && $route['path'] === $url) {
                $controllerName = $route['controller'];
                $action = $route['action'];

                // Load file controllernya
                $file = "../app/controllers/{$controllerName}.php";
                if (file_exists($file)) {
                    require_once $file;
                } else {
                    die("File Controller <b>{$controllerName}.php</b> tidak ditemukan di folder app/controllers/");
                }
                
                // SOLUSI UTAMA: Panggil class secara global (\) agar lepas dari jebakan namespace App\Core
                $globalControllerClass = '\\' . $controllerName;
                
                if (class_exists($globalControllerClass)) {
                    $controller = new $globalControllerClass();
                    $controller->$action();
                    return;
                } else {
                    die("Class <b>{$controllerName}</b> tidak ditemukan di dalam file {$controllerName}.php. Periksa penulisan nama class kamu!");
                }
            }
        }

        // Jika rute tidak ditemukan
        http_response_code(404);
        echo "<h1>404 - Rute '$url' Tidak Terdaftar!</h1>";
    }
}