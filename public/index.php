<?php
require_once '../app/core/Router.php';

use App\Core\Router;

$router = new Router();

// Register Routes
$router->add('GET','/','LandingController','index');
$router->add('GET','/home','HomeController','home');
$router->add('GET','/admin/login','AuthController','login');


$router->add('GET','/achievements/{id}','AchievementController','show');
$router->add('GET',  '/achievements/insert', 'AchievementController', 'insert');
$router->add('GET','/achievements/list','AchievementController','list');

$router->add('POST', '/achievement/insert', 'AchievementController', 'insert');
$router->run();

?>