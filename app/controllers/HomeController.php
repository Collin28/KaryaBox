<?php
namespace App\Controllers;
require_once '../app/core/Controller.php';
require_once '../app/models/Achievement.php';

use App\Core\Controller;
use App\Models\Achievement;

class HomeController extends Controller
{

    public function home(): void
    {
        $achievementModel = new Achievement();
        $achievementBanners = $achievementModel->getAchivementBanners();
        $achievementsWithoutBanner = $achievementModel->getAchivementsWithoutBanner();



        $this->view('home', [
            'achievementBanners' => $achievementBanners,
            'achievementsWithoutBanner' => $achievementsWithoutBanner
        ]);
    }

}


?>