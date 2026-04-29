<?php

class ContohStatic {
    public static $angka = 1;

    public static function halo() {
        return "Halo, selamat datang di pemrograman OOP dengan PHP!";
    }
}

// Mengakses properti statis tanpa membuat objek
echo ContohStatic::$angka; // Output: 1

echo "<hr>";

// Mengakses method statis tanpa membuat objek
echo ContohStatic::halo(); // Output: Halo, selamat datang di pemrograman OOP dengan PHP!