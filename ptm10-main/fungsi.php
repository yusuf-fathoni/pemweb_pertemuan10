<?php
// Tanpa parameter
echo "<h3>Salam tanpa parameter</h3>";
function salam() {
    echo "Selamat datang di PHP! <br>";
}
salam();
salam();


// Dengan parameter
echo "<h3>Salam dengan parameter</h3>";
function salam1($name){
    echo "Selamat datang di php, $name! ";
}

salam1("udin");

// Fungsi dengan return Value
echo "<h3>Fungsi dengan return value</h3> ";
function jumlah($a, $b){
    return $a + $b;
}

$hasil = jumlah(5,3);
echo "Hasil penjumlahan: $hasil";

// Tipe parameter Default
echo "<h3>Tipe parameter Default</h3>";
function salam2($name="User"){
    echo "selamat datang di PHP, $name! <br>";
}
salam2("dudy");
?>