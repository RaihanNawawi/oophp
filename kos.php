<?php

class Kos {

public $nama, $alamat, $pemilik, $fasilitas, $harga_bulanan;

// method constructor untuk mengisi nilai property saat objek dibuat
public function __construct ($nama = "Nama Kos", $alamat = "Alamat Kos", $pemilik = "Pemilik Kos", $fasilitas = "Fasilitas Kos", $harga_bulanan = 0){

$this->nama = $nama;
$this->alamat = $alamat;
$this->pemilik = $pemilik;
$this->fasilitas = $fasilitas;
$this->harga_bulanan = $harga_bulanan;
}

public function cetakLabelKos() {
    return "Profil Kos : $this->nama, $this->alamat, $this->pemilik, $this->fasilitas, Harga Bulanan: $this->harga_bulanan";
   }
}

$kos1 = new Kos("Kos Melati", "Dayun, Siak", "Anas Malik", "Kasur, AC, Kamar Mandi Dalam", 500000);
$kos2 = new Kos();

echo $kos1->cetakLabelKos();
echo "<br>";
echo $kos2->cetakLabelKos();