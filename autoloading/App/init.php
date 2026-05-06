<?php

//  class yang mengimplementasi interface InfoProduk harus deklarasikan setelah interface InfoProduk dideklarasikan
//  Solusi  1 (Old Approach): Mendeklarasikan interface InfoProduk terlebih dahulu, baru setelah itu mendeklarasikan class yang mengimplementasi interface tersebut
// require_once 'Produk/InfoProduk.php'; // Interface
// require_once 'Produk/Produk.php'; // Class
// require_once 'Produk/Komik.php'; // Class
// require_once 'Produk/Game.php'; // Class

// Solusi 2 (Best Practice): Menggunakan autoloading, sehingga kita tidak perlu lagi memanggil file-file class secara manual
// function autoloading untuk memanggil file class secara otomatis
spl_autoload_register(function ($class) {
    require_once __DIR__ . '/Produk/' . $class . '.php';
});
