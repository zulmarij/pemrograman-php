<?php
$alas = 10;
$tinggi = 5;
function luas_segitiga($alas, $tinggi)
{
    $luas = $alas * $tinggi / 2;
    return $luas;
}
echo "Luas segitiga adalah " . luas_segitiga($alas, $tinggi) . "<br>";
