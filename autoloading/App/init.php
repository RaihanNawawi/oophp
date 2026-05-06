<?php

//  class yang mengimplementasi interface InfoProduk harus deklarasikan setelah interface InfoProduk dideklarasikan
//  Ini akan error karena Class Coba mengimplementasi interface InfoProduk, sementara interface InfoProduk belum dideklarasikan
require_once 'Produk/Produk.php'; // Class
require_once 'Produk/Komik.php'; // Class
require_once 'Produk/Game.php'; // Class
require_once 'Produk/InfoProduk.php'; // Interface

