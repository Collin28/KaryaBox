<?php
namespace App\Controllers;
require_once '../app/core/Controller.php';
require_once '../app/models/Achievement.php';

use App\Core\Controller;
use App\Models\Achievement;

class AchievementController extends Controller
{
    public function show(string $id): void
    {
        $achievementModel = new Achievement();
        $achievement = $achievementModel->getAchivement((int)$id);

        $this->view('achievements.show', [
            'achievement' => $achievement
        ]);
    }

    public function insert(): void
    {
        if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
            $this->view('achievements.insert');
            return;
        }

        $achievementModel = new Achievement();
        $file = $_FILES['image_url'] ?? [];
        $success = $achievementModel->insert($_POST, $file);

        if ($success) {
            header('Location: /home');
            exit;
        } else {
            $_SESSION['error'] = 'Gagal menyimpan data. Cek format/ukuran gambar.';
            header('Location: /achievements/list');
            exit;
        }
    }

    public function list(): void
    {
        $achievementModel = new Achievement();
        $achievements = $achievementModel->getAchivementsWithoutBanner();

        $this->view('achievements.list', [
            'achievementsWithoutBanner' => $achievements
        ]);
    }

    public function delete(string $id): void 
    {
        $achievementModel = new Achievement();
        $deleted = $achievementModel->delete((int)$id); 

        if ($deleted) {
            header('Location: /achievements/list');
            exit;
        }

        http_response_code(500);
        echo 'Gagal menghapus data.';
    }
}