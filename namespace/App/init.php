<?php


spl_autoload_register(function($class) {
    // $class = App\Produk\User dengan menggunakan explode() maka akan diubah kedalam array ['App', 'Produk', 'User']
    $class = explode('\\', $class);
    $class = end($class); 
    require_once __DIR__ . '/Produk/' . $class . '.php';
});

spl_autoload_register(function($class) {
    // $class = App\Services\User dengan menggunakan explode() maka akan diubah kedalam array ['App', 'Services', 'User']
    $class = explode('\\', $class);
    $class = end($class);
    require_once __DIR__ . '/Services/' . $class . '.php';
});
