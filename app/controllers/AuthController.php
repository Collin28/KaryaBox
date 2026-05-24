<?php
namespace App\Controllers;

require_once '../app/core/Controller.php';
require_once '../app/models/Admin.php';

use App\Core\Controller;
use App\Models\Admin;

class AuthController extends Controller
{
    public function login(): void
    {
           if (session_status() === PHP_SESSION_NONE) {
            session_start();
        }

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $usernameInput = trim($_POST['name'] ?? '');
            $passwordInput = $_POST['password'] ?? '';

            $adminModel = new Admin();
            $admin = $adminModel->getAdminByName($usernameInput);

            if ($admin && $passwordInput === $admin['password']) {
                $_SESSION['admin_logged_in'] = true;
                $_SESSION['admin_user'] = $admin['name'];

                header('Location: /home');
                exit();
            } else {
                $data['error'] = 'Username atau password salah!';
                $this->view('auth/login', $data);
                return;
            }
        }

        // Show login form
        $this->view('auth/login');
    }

    public function logout(): void
    {
        if (session_status() === PHP_SESSION_NONE) {
            session_start();
        }

        session_destroy();
        header('Location: /admin/login');
        exit();
    }
}