<?php
$buah = ["mangga","apel","jeruk"];
echo $buah[0];//mangga
echo "<br>";
echo $buah[1];//apel
echo "<br>";
echo "<br>";

$mhs = [
    "nama" => "yusuf",
    "nim" => "14523051",
    "jurusan" => "teknik informatika"
];
echo  $mhs["nama"];
echo "<br>";
echo  $mhs["nim"];
echo "<br>";
echo  $mhs["jurusan"];
echo "<br>";
echo "<br>";

$multiArr = [
    ["yusuf","14523051","informatika"],
    ["nana","14523033","informatika"],
];
echo $multiArr[0][0];
echo $multiArr[0][1];
echo "<br>";
echo "<br>";

for ($i=0;$i < count($buah); $i++) {
    echo $buah[$i] . "<br>";
}

echo "<br>";
echo "<br>";

foreach ($mhs as $key =>$value){
    echo "$key : $value <br>";
}

?>