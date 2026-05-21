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

}
?>