<?php
$mahasiswa = array(
    array("Marimar", 20, "Wanita"),
    array("Soledad", 25, "Wanita"),
    array("Alfonso", 30, "Pria")
);
echo $mahasiswa[0][0] . " memiliki Usia " . $mahasiswa[0][1] . " Tahun dan jenis kelamin " . $mahasiswa[0][2] . "<br>";
echo $mahasiswa[1][0] . " memiliki Usia " . $mahasiswa[1][1] . " Tahun dan jenis kelamin " . $mahasiswa[1][2] . "<br>";

$karnivora  = ['singa', 'macan', 'serigala'];
$herbivora  = ['kuda', 'sapi', 'kambing'];
$omnivora   = ['ayam', 'monyet', 'babi'];
$binatang   = ['karnivora' => $karnivora, '$herbivora' => $herbivora, '$omnivora' => $omnivora];
echo $binatang['karnivora'][0];

$mahasiswa = array(
    array("Marimar", 20, "Wanita"),
    array("Soledad", 25, "Wanita"),
    array("Alfonso", 30, "Pria")
);
for ($baris = 0; $baris < 3; $baris++) {
    echo "<p><b>Baris No: $baris</b></p>";
    echo "<ul>";
    for ($kolom = 0; $kolom < 3; $kolom++) {
        echo "<li>" . $mahasiswa[$baris][$kolom] . "</li>";
    }
    echo "</ul>";
}
