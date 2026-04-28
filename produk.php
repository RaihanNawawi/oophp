<?php

// Jualan produk
// Komik
// Game

class Produk {

// property
private $judul;
// Protected : hanya bisa diakses dalam class ini dan class turunannya
protected $harga;


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

    // method untuk mencetak informasi harga produk
    protected function cetakHarga() {
        // Mengembalikan string yang berisi harga produk dengan format yang sesuai
        return "Harga: Rp. " . number_format($this->harga, 0, ',', '.');
       }

}

class Komik extends Produk {
    // Menambahkan properti khusus untuk Komik
    public $penulis;
    public $penerbit;

        public function __construct ($judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0) {
                // Memanggil constructor parent untuk menginisialisasi properti yang diwarisi
                parent::__construct($judul, $harga);
                $this->penulis = $penulis;
                $this->penerbit = $penerbit;
        }

    public function cetakInfoProduk() {
        return "Komik: " . parent::getJudul() . " | Penulis: " . $this->penulis . " | Penerbit: " . $this->penerbit . " | " . parent::cetakHarga();
    }
}

class Game extends Produk {
    // Menambahkan properti khusus untuk Game
    public $developer;

        public function __construct ($judul = "judul", $developer = "developer", $harga = 0) {
                // Memanggil constructor parent untuk menginisialisasi properti yang diwarisi
                parent::__construct($judul, $harga);
                $this->developer = $developer;
        }

    public function cetakInfoProduk() {
        // (Work) method cetakHarga() sudah bisa diakses karena sudah diubah menjadi protected
        return "Game: " . parent::getJudul() . " | Developer: " . $this->developer . " | " . parent::cetakHarga();
    }
}

$produk1 = new Komik("Attack on Titan", "Hajime Isayama", "Shueisha", 300000);
$produk2 = new Game("Call of Duty", "Activision", 2500000);

// Mengganti judul produk menggunakan setter
$produk1->setJudul("Shingeki no Kyojin");
// Menampilkan informasi produk menggunakan getter dan method cetakInfoProduk
echo $produk1->cetakInfoProduk();
echo "<br>";
echo "<hr>";
// Mengganti judul produk menggunakan setter
$produk2->setJudul("Call of Duty: Modern Warfare");
// Menampilkan informasi produk menggunakan getter dan method cetakInfoProduk
echo $produk2->cetakInfoProduk();