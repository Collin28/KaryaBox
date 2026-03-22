<?php
    namespace App\Controllers;

    class LandingController{
        
        public function index():void
        {
            require_once '../app/views/index.php';
        }
    }
?>