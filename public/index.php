<?php
require_once '../app/core/Router.php';

use App\Core\Router;

$router = new Router();

// Register Routes
$router->add('GET','/','LandingController','index');
$router->add('GET','/home','HomeController','home');
$router->add('GET','/admin/login','AuthController','login');
$router->add('GET','/detail','DetailController','detail');







$router->run();

?>