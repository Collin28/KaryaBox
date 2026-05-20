<?php
    namespace App\Controllers;

    class AuthController {

        public function login():void{
            require_once '../app/views/loginpage.php';
            
        }

        public function regis():void{
            require_once '../app/views/regis.php';
        }

    }
    
?>