<?php

// Memanggul file init.php yang berada di folder Produk
require_once 'App/init.php';

// Ini akan error karena class User yang berada di folder Produk dan Services memiliki nama yang sama
new User(); // Memanggil class User yang berada di folder Produk

new User(); // Memanggil class User yang berada di folder Services