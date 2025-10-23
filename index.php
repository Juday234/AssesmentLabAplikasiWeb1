<?php
require_once 'Hewan.php';

// Membuat beberapa objek
$hewan1 = new Mamalia(1, "Singa", "Tebal dan Coklat");
$hewan2 = new Burung(2, "Merpati", "Putih");
$hewan3 = new Mamalia(3, "Gajah", "Tidak punya bulu");

// Menampilkan hasil
echo "<h2>Daftar Hewan di Kebun Binatang</h2>";
echo "<p>" . $hewan1->displayInfo() . "</p>";
echo "<p>" . $hewan2->displayInfo() . "</p>";
echo "<p>" . $hewan3->displayInfo() . "</p>";
?>
