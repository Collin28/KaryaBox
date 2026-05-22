<?php
namespace App\Controllers;
require_once '../app/core/Controller.php';
require_once '../app/models/Achievement.php';

use App\Core\Controller;
use App\Models\Achievement;

class AchievementController extends Controller
{

    public function show(string $id)
    {
        $id = intval($id);
        $achievementModel = new Achievement();
        $achievement = $achievementModel->getAchivement($id);

        $this->view('achievements.show', [
            'achievement' => $achievement
        ]);
    }

    public function insert()
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
            header('Location: /achievement/insert');
            exit;
        }
    }

    public function list()
    {

        $achievementModel = new Achievement();
        $achievements = $achievementModel->getAchivementsWithoutBanner();
        
        $this->view('achievements.list', [
            'achievementsWithoutBanner' => $achievements
        ]);
    }

    public function update(array $data, int $id): bool
    {
        $query = "UPDATE {$this->table} SET 
                    name = ?, 
                    title = ?, 
                    description = ?, 
                    category_id = ?, 
                    unit_sekolah_id = ?, 
                    image_url = ? 
                  WHERE id = ?";

        $stmt = $this->connection->prepare($query);

        $name = htmlspecialchars($data['name']);
        $title = htmlspecialchars($data['title']);
        $desc = htmlspecialchars($data['description']);
        $cate = (int) $data['category_id'];
        $school = (int) $data['unit_sekolah_id'];
        $imageUrl = $data['image_url'];

        $stmt->bind_param('sssiisi', $name, $title, $desc, $cate, $school, $imageUrl, $id);
        $stmt->execute();

        return $stmt->errno === 0;
    }
}
?>