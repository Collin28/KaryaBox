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

$router->add('POST', '/achievements/insert', 'AchievementController', 'insert');
$router->add('DELETE', '/achievements/{id}', 'AchievementController','delete');
$router->run();

?>