<?php

class Contoh {
    public static $angka = 1;

    public function halo() {
    // Menggunakan self untuk mengakses properti statis
        return self::$angka++ . ". Halo, selamat datang di pemrograman OOP dengan PHP!" . "<br>";
    }
}

// Membuat objek dari kelas Contoh
$objek1 = new Contoh();
// Memanggil metode halo() pada objek pertama
echo $objek1->halo(); // Output: 1. Halo, selamat datang di pemrograman OOP dengan PHP!
echo $objek1->halo(); // Output: 2. Halo, selamat datang di pemrograman OOP dengan PHP!

$objek2 = new Contoh();
// Memanggil metode halo() pada objek kedua
echo $objek2->halo(); // Output: 3. Halo, selamat datang di pemrograman OOP dengan PHP!
echo $objek2->halo(); // Output: 4. Halo, selamat datang di pemrograman OOP dengan PHP!