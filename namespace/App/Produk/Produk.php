<?php

// Jualan produk
// Komik
// Game

abstract class Produk implements InfoProduk {

// property
private $judul;
private $harga;


// Constructor untuk menginisialisasi properti dengan nilai default
       public function __construct($judul = "judul", $harga = 0) {
        // Mengisi properti dengan nilai yang diberikan atau nilai default
        $this->judul = $judul;
        $this->harga = $harga;
       }

    public function setJudul($judul) {
        echo "Warning: Judul diubah dari " . $this->judul . " menjadi: " . $judul . "<br>";
        $this->judul = $judul;
    }

    public function getJudul() {
        return $this->judul;
    }

    public function setHarga($harga) {
        echo "Warning: Harga Produk " . $this->judul . " diubah dari Rp. " . number_format($this->harga, 0, ',', '.') . " menjadi: Rp. " . number_format($harga, 0, ',', '.') . "<br>";
        $this->harga = $harga;
    }

    // method untuk mencetak informasi harga produk
    public function getHarga() {
        // Mengembalikan string yang berisi harga produk dengan format yang sesuai
        return "Harga: Rp. " . number_format($this->harga, 0, ',', '.');
       }

}