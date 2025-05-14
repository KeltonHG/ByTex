<?php
require_once '../config/database.php';
require_once '../app/controllers/ProductosController.php';
$controller = new ProductosController();
$controller->index();
?>
<link rel="stylesheet" href="/ByTex/public/css/style.css">
