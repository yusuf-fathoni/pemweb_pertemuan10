<?php
echo "<h1>kodingan function tanpa parameter<h1>";
function salam() {
    echo "selamat datang di PHP!<br>";
}
salam();//memanggil fungsi
salam();

echo "<h1>kodingan function dengan parameter<h1>";

function namaAnda($nama){
    echo "selamat datang php, $nama";
}
namaAnda("yusuf"); echo "<br>";

echo "<h1>dengan parameter default<br>";

function salam2($nama = "user"){
    echo "<br>selamat datang,hallo $nama";
}
salam2();
salam2("salam");


function jumlah($a,$b){
    return $a + $b;
}
$hasil = jumlah(70, 198);
echo "<br> hasil :".$hasil;

?>
