<?php

// Menggunakan require untuk memanggil semua class didalam folder Produk
require_once 'App/Produk/InfoProduk.php';
require_once 'App/Produk/Produk.php';
require_once 'App/Produk/Komik.php';
require_once 'App/Produk/Game.php';

$produk1 = new Komik("Attack on Titan", "Hajime Isayama", "Shueisha", 300000);
$produk2 = new Game("Call of Duty", "Activision", 2500000);

// Menampilkan informasi produk menggunakan method cetakInfoProduk
echo $produk1->cetakInfoProduk();
echo "<hr>";
echo $produk2->cetakInfoProduk();