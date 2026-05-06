<?php

// Memanggul file init.php yang berada di folder Produk
require_once 'App/init.php';

$produk1 = new Komik("Attack on Titan", "Hajime Isayama", "Shueisha", 300000);
$produk2 = new Game("Call of Duty", "Activision", 2500000);

// Menampilkan informasi produk menggunakan method cetakInfoProduk
echo $produk1->cetakInfoProduk();
echo "<hr>";
echo $produk2->cetakInfoProduk();
echo "<hr>";