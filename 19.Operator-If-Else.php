<?php
$ukuran = 'XL';
$warna  = 'biru';
$biaya  = 70000;
if ($ukuran == 'XL' && $warna == 'merah') {
    $biaya_tambahan = 5000;
    $total_biaya    = $biaya + $biaya_tambahan;
    echo "Biaya yang dikenakan adalah " . $total_biaya;
} else {
    echo "Biaya yang dikenakan adalah " . $biaya;
}

// $tujuan = 'Surabaya';
// $harga  = 100000;
// $diskon = 10000;

// if ($tujuan == 'Surabaya' || $tujuan == 'Malang') {
//     $harga  = $harga - $diskon;
//     echo "Harga tiket adalah " . $harga;
// } else {
//     echo "Harga tiket adalah " . $harga;
// }
