<?php
class Dashboard extends Controller {
    public function __construct() {
        // Jalankan session_start() jika belum ada di file init/core kamu
        if (!isset($_SESSION['admin_logged_in'])) {
            // Tendang balik ke halaman login jika bukan admin
            header('Location: ' . BASEURL . '/auth');
            exit;
        }
    }

    public function index() {
        $this->view('dashboard/index');
    }
}