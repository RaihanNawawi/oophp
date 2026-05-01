<?php

// Membuat kelas abstrak
abstract class Warna  {
    abstract public function getWarna();
}

// Membuat kelas turunan yang mengimplementasikan (interface/kerangka dasar) dari kelas abstrak
class Merah extends Warna {
    public function getWarna() {
        return "Merah";
    }
}

// Masalah: Tidak bisa membuat objek dari kelas abstrak
// $warna = new Warna(); // Ini akan menghasilkan error & Secara logika juga tidak masuk akal karena kelas abstrak tidak memiliki implementasi konkret, sehingga tidak bisa digunakan untuk membuat objek langsung.

// Membuat objek dari kelas turunan
$merah = new Merah();
echo $merah->getWarna(); // Output: Merah
