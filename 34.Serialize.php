<?php
$karyawan   = [
    ['nama' => 'Toni', 'alamat' => 'Bandung'],
    ['nama' => 'Naufal', 'alamat' => 'Bandung'],
    ['nama' => 'Davi', 'alamat' => 'Jakarta']
];
$data = serialize($karyawan);
file_put_contents('data.txt', $data);
$output = file_get_contents('data.txt');
$hasil  = unserialize($output);
print_r($hasil);
