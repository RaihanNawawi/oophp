<?php

// Memanggul file init.php yang berada di folder Produk
require_once 'App/init.php';

new \App\Produk\User(); // Memanggil class User yang berada di folder Produk

new \App\Services\User(); // Memanggil class User yang berada di folder Services