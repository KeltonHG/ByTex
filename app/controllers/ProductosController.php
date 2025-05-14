<?php
require_once '../app/models/Producto.php';
class ProductosController {
    public function index() {
        global $pdo;
        $featured = Producto::featured($pdo);
        $productos = Producto::all($pdo);
        include '../app/views/home.php';
    }
}
?>