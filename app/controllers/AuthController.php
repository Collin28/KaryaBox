<?php

class AuthController extends \Controller {
    
    public function login() {
        if (session_status() == PHP_SESSION_NONE) {
            session_start();
        }

        // 1. JIKA USER KLIK TOMBOL MASUK
        if (isset($_POST['submit'])) {
            $usernameInput = isset($_POST['email']) ? trim($_POST['email']) : ''; 
            $passwordInput = isset($_POST['password']) ? $_POST['password'] : '';

            $userModel = $this->model('user');
            $user = $userModel->getUserByUsername($usernameInput);

            if ($user) {
                // JIKA PASSWORD BENAR (101010)
                if ($passwordInput === $user['password']) {
                    
                    $_SESSION['admin_logged_in'] = true;
                    $_SESSION['admin_user'] = $user['name'];
                    
                    // LOKASI SETELAH LOGIN: Langsung meluncur ke home.php
                    header('Location: /KARYABOX/public/home');
                    exit();
                    
                } else {
                    // JIKA PASSWORD SALAH: Kunci, jangan kasih masuk!
                    $data['error'] = 'Password salah!';
                    $this->view('auth/login', $data);
                    exit();
                }
            } else {
                // JIKA USERNAME SALAH
                $data['error'] = 'Username tidak terdaftar!';
                $this->view('auth/login', $data);
                exit();
            }
        }

        // 2. JIKA BARU BUKA HALAMAN (Tampilkan form login)
        $this->view('auth/login');
    }

    // Biarkan fungsi ini ada sebagai pajangan agar Router kawanmu tidak crash
    public function authenticate() {
        header('Location: /KARYABOX/public/home');
        exit();
    }
}