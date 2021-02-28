<?php
$angka  = array(1,2,3,4,5); //kumpulan data integer
$buah   = ["pisang","anggur","apel","kiwi","nanas"]; //kumpulan data string
echo $angka[1];
echo "<br>";
echo $buah[3]; //mencetak array pada index ke 3

echo "<br>";
print_r($angka);
echo "<br>";
print_r($buah);

$angka[]= 6; // menambahkan data ke dalam array $angka dimana akan diletakan di index paling terak
$buah[] = "nangka"; 
echo "<br>";
var_dump($angka);
echo "<br>";
var_dump($buah);

//tuliskan nama array dan nomor index yang akan diubah, lalu isi dengan data baru
$angka[3]   = 99;  
$buah[2]    = "strawberry";
echo "<br>";
var_dump($angka);
echo "<br>";
var_dump($buah);
?>