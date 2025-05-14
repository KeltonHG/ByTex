<?php
class Producto {
    public static function all($pdo) {
        $stmt = $pdo->query("SELECT * FROM productos");
        return $stmt->fetchAll();
    }
    public static function featured($pdo) {
        $stmt = $pdo->query("SELECT * FROM productos WHERE destacado=1 LIMIT 5");
        return $stmt->fetchAll();
    }
}
?>