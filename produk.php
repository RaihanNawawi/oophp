<?php

// Jualan produk
// Komik
// Game

class Produk {

// property
public $judul;
public $harga;


// Constructor untuk menginisialisasi properti dengan nilai default
       public function __construct($judul = "judul", $harga = 0) {
        // Mengisi properti dengan nilai yang diberikan atau nilai default
        $this->judul = $judul;
        $this->harga = $harga;
       }
        // method untuk mencetak informasi harga produk
       public function cetakHarga() {
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
        return "Komik: $this->judul | Penulis: $this->penulis | Penerbit: $this->penerbit | " . parent::cetakHarga();
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
        return "Game: $this->judul | Developer: $this->developer | " . parent::cetakHarga();
    }
}

$produk1 = new Komik("Attack on Titan", "Hajime Isayama", "Shueisha", 300000);
$produk2 = new Game("Call of Duty", "Activision", 2500000);

// menampilkan informasi produk
echo $produk1->cetakInfoProduk();
echo "<br>";
echo $produk2->cetakInfoProduk();
echo '<hr>';
// Contoh jika kita menggunakan public untuk  property (Berbahaya karena property/data instance bisa diubah-ubah)
$produk1->harga = 5000; // Mengubah harga produk secara langsung
echo $produk1->cetakInfoProduk(); // Menampilkan informasi produk setelah harga diubah