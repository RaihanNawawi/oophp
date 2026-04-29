<?php

class ContohStatic {
    public static $angka = 1;

    public static function halo() {
    // Menggunakan self untuk mengakses properti statis dalam method statis
        return self::$angka++ . ". Halo, selamat datang di pemrograman OOP dengan PHP!" . "<br>";
    }
}

// Mengakses method statis tanpa membuat objek
echo ContohStatic::halo(); // Output: 1. Halo, selamat datang di pemrograman OOP dengan PHP!
echo ContohStatic::halo(); // Output: 2. Halo, selamat datang di pemrograman OOP dengan PHP!
echo ContohStatic::halo(); // Output: 3. Halo, selamat datang di pemrograman OOP dengan PHP!