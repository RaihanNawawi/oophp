<?php

//Jualan produk
//Komik
//Game

class produk {

// property dengan nilai default
public $judul = "judul",
       $penulis = "penulis",
       $penerbit = "penerbit",
       $harga = 0;


}

$produk1 = new produk();
// mengisi property dengan nilai yang berbeda dengan nilai default
$produk1->judul = "Attack on Titan";
$produk1->penulis = "Hajime Isayama";
$produk1->penerbit = "Shueisha";
$produk1->harga = 30000;

// menampilkan informasi produk
echo "Komik : $produk1->judul, $produk1->penulis, $produk1->penerbit, Harga: $produk1->harga";

echo "<br>";

// membuat objek produk kedua
$produk2 = new produk();
$produk2->judul = "Call of Duty";
$produk2->developer = "Activision";
$produk2->harga = 500000;
// menampilkan informasi produk
echo "Game : $produk2->judul, $produk2->developer, Harga: $produk2->harga";

echo "<br>";

var_dump($produk1);
echo "<br>";
var_dump($produk2);