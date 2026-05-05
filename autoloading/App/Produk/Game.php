<?php

class Game extends Produk implements InfoProduk {
    // Menambahkan properti khusus untuk Game
    private $developer;

        public function __construct ($judul = "judul", $developer = "developer", $harga = 0) {
                // Memanggil constructor parent untuk menginisialisasi properti yang diwarisi
                parent::__construct($judul, $harga);
                $this->developer = $developer;
        }

    public function cetakInfoProduk() {
        return "Game: " . $this->getJudul() . " | Developer: " . $this->developer . " | " . $this->getHarga();
    }
}