<?php
$alamat = array(
    "naufal" => "Bandung",
    "meilan" => "Malang",
    "marimar" => "Mexico"
);

// echo "Alamat Marimar adalah di " . $alamat['marimar'];

foreach ($alamat as $x => $value) {
    echo "Alamat " . $x . "  di " . $value;
    echo "<br>";
}
