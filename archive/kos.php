<?php

class Kos {

public $nama, $alamat, $pemilik, $fasilitas, $harga_bulanan;

// Constructor untuk menginisialisasi properti dengan nilai default
public function __construct ($nama = "Nama Kos", $alamat = "Alamat Kos", $pemilik = "Pemilik Kos", $fasilitas = "Fasilitas Kos", $harga_bulanan = 0){

// Mengisi properti dengan nilai yang diberikan atau nilai default
$this->nama = $nama;
$this->alamat = $alamat;
$this->pemilik = $pemilik;
$this->fasilitas = $fasilitas;
$this->harga_bulanan = $harga_bulanan;
}
}

class CetakInfoKos {
    // Hanya menerima spesifik object dari class Kos
 public function cetak(Kos $kos){

 return "{$kos->nama} | {$kos->alamat} | Pemilik Kos: {$kos->pemilik} | Fasilitas Kos: {$kos->fasilitas} | Harga per Bulan: Rp.{$kos->harga_bulanan}";
 }

}

// Cara menggunakan class Kos
$kos1 = new Kos("Kos Melati", "Dayun, Siak", "Anas Malik", "Kasur, AC, Kamar Mandi Dalam", 500000);
$kos2 = new Kos();

// Cara menggunakan class CetakInfoKos
$infoKos = new CetakInfoKos();
echo $infoKos->cetak($kos1);
echo "<br>";
echo $infoKos->cetak($kos2);