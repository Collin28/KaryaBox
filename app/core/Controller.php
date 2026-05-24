<?php

class Controller {
    
    // Fungsi untuk memanggil tampilan (view)
    public function view($view, $data = []) {
        $viewFile = __DIR__ . '/../views/' . $view . '.php';
        
        if (file_exists($viewFile)) {
            require_once $viewFile;
        } else {
            die("File tampilan <b>app/views/{$view}.php</b> tidak ditemukan!");
        }
    }

    // FUNGSI INI YANG HILANG: Untuk memanggil Model database
    public function model($model) {
        $modelFile = __DIR__ . '/../models/' . $model . '.php';
        
        if (file_exists($modelFile)) {
            require_once $modelFile;
            
            // Mengambil nama class secara global (\) agar aman dari namespace
            $globalModelClass = '\\' . $model;
            return new $globalModelClass();
        } else {
            die("File Model <b>app/models/{$model}.php</b> tidak ditemukan!");
        }
    }
}