<?php

// Jualan produk
// Komik
// Game


interface InfoProduk {
    public function cetakInfoProduk();
}

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

$produk1 = new Komik("Attack on Titan", "Hajime Isayama", "Shueisha", 300000);
$produk2 = new Game("Call of Duty", "Activision", 2500000);

// Menampilkan informasi produk menggunakan method cetakInfoProduk
echo $produk1->cetakInfoProduk();
echo "<hr>";
echo $produk2->cetakInfoProduk();