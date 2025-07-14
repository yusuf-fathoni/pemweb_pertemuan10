<?php
// Indexed array
echo "<h3>Indexed Array</h3>";
$buah = ["Apel", "Jeruk", "Mangga"];
echo $buah[0];
echo " ";
echo $buah[1];

// Associative Array
echo "<h3>Associative Array</h3>";
$mahasiswa = [
    "nama" => "Budi",
    "nim" => "123456",
    "jurusan" => "Informatika"
];
echo $mahasiswa["nama"]." ";
echo $mahasiswa["jurusan"];

// Multidimensional Array
echo "<h3>Multidimensional Array</h3>";
$daftarMahasiswa =[
    ["Budi","123","Informatika"],
    ["Ani","124","Sistem Informasi"],
];
echo $daftarMahasiswa[0][0]. " ";
echo $daftarMahasiswa[1][2];

// array dan looping
echo "<h3>Array dan Looping</h3>";
echo "<h3>Array dan Looping Menggunakan for untuk indexed array: </h3>";
$buah = ["apel", "jeruk", "mangga"];
for($i = 0; $i < count($buah); $i++){
    echo $buah[$i] , "<br>";
}

echo "<h3>Array dan Looping Menggunakan foreach untuk Associative Array: </h3>";
$mahasiswa =[
    "nama" => "budi",
    "nim" => "123456",
    "jurusan" => "informatika"
];
foreach ($mahasiswa as $key => $value){
    echo "$key: $value <br>";
}

?>