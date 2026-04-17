<?php

// Jualan produk
// Manga

class produk {

// property dengan nilai default
public $judul = "judul",
       $penulis = "penulis",
       $penerbit = "penerbit",
       $harga = 0;

       public function cetakLabelProduk() {
        // menggunakan $this untuk mengakses property dalam class
        return "Manga : $this->judul, $this->penulis, $this->penerbit, Harga: $this->harga";
       }

}

$produk1 = new produk();
// mengisi property dengan nilai yang berbeda dengan nilai default
$produk1->judul = "Attack on Titan";
$produk1->penulis = "Hajime Isayama";
$produk1->penerbit = "Shueisha";
$produk1->harga = 30000;

// menampilkan informasi produk
echo $produk1->cetakLabelProduk();