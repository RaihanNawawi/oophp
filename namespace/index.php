<?php
use App\Produk\User as ProdukUser; // Menggunakan alias untuk class User yang berada di folder Produk
use App\Services\User as ServicesUser; // Menggunakan alias untuk class User yang berada di folder Services

// Memanggul file init.php yang berada di folder Produk
require_once 'App/init.php';

new ProdukUser(); // Memanggil class User yang berada di folder Produk

new ServicesUser(); // Memanggil class User yang berada di folder Services