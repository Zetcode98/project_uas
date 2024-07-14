<?php
// buat class rumah
class Rumah {
    // Properti
    public $nama_pemilik = "kosong";
    public $warna_rumah = "kosong";
    public $merk_tv = "kosong";
    
    // Metode
    public function getRumah($nama_pemilik, $warna_rumah, $merk_tv) {
        echo "Rumah Ini Milik: " . $nama_pemilik;
        echo "<br>"; 
        echo "Warna Rumah Ini Adalah: " . $warna_rumah;
        echo "<br>"; 
        echo "Merk TV Nya: " . $merk_tv;
    }

    // Method untuk mendapatkan detail rumah
    public function getDetail() {
        echo "Rumah Ini Milik: " . $this->nama_pemilik;
        echo "<br>"; 
        echo "Warna Rumah Ini Adalah: " . $this->warna_rumah;
        echo "<br>"; 
        echo "Merk TV Nya: " . $this->merk_tv;
    }
}

// // Objek rumah
// // Ini rumah 1
// $rumah1 = new Rumah();
// $rumah1->nama_pemilik = "Bu Aul";
// $rumah1->warna_rumah = "Pink";
// $rumah1->merk_tv = "Toshiba";
// var_dump($rumah1);

// echo "<br>";
// echo "<br>";
// echo "<hr>";

// Ini rumah 2
$rumah2 = new Rumah();
$rumah2->nama_pemilik = "Om Jawir";
$rumah2->warna_rumah = "Putih";
$rumah2->merk_tv = "Samsung";
$rumah2->getDetail(); // Memanggil method getDetail() untuk mencetak detail rumah
echo "<br>";
echo "<br>";
var_dump($rumah2);
?>
