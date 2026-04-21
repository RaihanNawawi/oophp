<?php

// Jualan produk
// Komik
// Game

class produk {

// property
public $judul, $tipe, $penulis, $penerbit, $developer, $harga;


// Constructor untuk menginisialisasi properti dengan nilai default
       public function __construct($judul = "judul", $tipe = "tipe", $penulis = "penulis", $penerbit = "penerbit", $developer = "developer", $harga = 0) {
        // Mengisi properti dengan nilai yang diberikan atau nilai default
        $this->judul = $judul;
        $this->tipe = $tipe;
        $this->penulis = $penulis;
        $this->penerbit = $penerbit;
        $this->developer = $developer;
        $this->harga = $harga;
       }

       public function cetakInfoProduk() {
        // menggunakan $this untuk mengakses property dalam class
        $str = "Produk : $this->judul, Tipe: $this->tipe";
        if ($this->tipe == "Komik") {
            $str .= ", Penulis: $this->penulis, Penerbit: $this->penerbit";
        } else if ($this->tipe == "Game") {
            $str .= ", Developer: $this->developer";
        }
        $harga = "Harga: Rp. $this->harga";
        return $str . " | " . $harga;
       }

}

$produk1 = new produk("Attack on Titan", "Komik", "Hajime Isayama", "Shueisha", NULL,  30000);
$produk2 = new produk("Call of Duty", "Game", NULL, NULL, "Activision", 25000);

// menampilkan informasi produk
echo $produk1->cetakInfoProduk();
echo "<br>";
echo $produk2->cetakInfoProduk();