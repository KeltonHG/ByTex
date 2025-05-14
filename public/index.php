<?php
$route = $_GET['route'] ?? 'home';

switch ($route) {
  case 'home':
  default:
    include '../app/controllers/HomeController.php';
    $controller = new HomeController();
    $controller->index();
    break;
    //ELPEPEPEPEPEPEPEPEP
}
