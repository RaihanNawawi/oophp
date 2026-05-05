<?php

class Komik extends Produk implements InfoProduk {
    // Menambahkan properti khusus untuk Komik
    private $penulis;
    private $penerbit;

    public function __construct ($judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0) {
                // Memanggil constructor parent untuk menginisialisasi properti yang diwarisi
                parent::__construct($judul, $harga);
                $this->penulis = $penulis;
                $this->penerbit = $penerbit;
        }

    public function cetakInfoProduk() {
        return "Komik: " . $this->getJudul() . " | Penulis: " . $this->penulis . " | Penerbit: " . $this->penerbit . " | " . $this->getHarga();
    }
}