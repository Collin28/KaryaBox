<?php
namespace App\Controllers;
require_once '../app/core/Controller.php';
require_once '../app/models/Achievement.php';

use App\Core\Controller;
use App\Models\Achievement;

class DetailController extends Controller
{

    public function detail(): void
    {
        $achievementModel = new Achievement();
        $achievementsWithoutBanner = $achievementModel->getAchivementsWithoutBanner();

        $this->view('detailkarya', [
            'achievementsWithoutBanner' => $achievementsWithoutBanner
        ]);
    }

}
?>