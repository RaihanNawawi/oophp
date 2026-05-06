<?php
// Menggunakan autoload untuk memanggil class yang ada didalam folder Produk secara otomatis
spl_autoload_register(function($class) {
    require_once __DIR__ . '/Produk/' . $class . '.php';
});