<?php

// Magic Constants Examples
echo "Baris saat ini: " . __LINE__; // Output: nomor baris saat ini

echo "<hr>";

echo "Path file saat ini: " . __FILE__; // Output: path lengkap dari file saat ini

echo "<hr>";

echo "Anda berada di direktori: " . __DIR__; // Output: direktori dari file saat ini

echo "<hr>";

function coba() {
    return "Ini Function: " . __FUNCTION__; // Output: nama fungsi saat ini
}
echo coba();

echo "<hr>";

class Coba {
    public $kelas = "Ini Class: " . __CLASS__; // Output: nama kelas saat ini
}
$obj = new Coba();
echo $obj->kelas;