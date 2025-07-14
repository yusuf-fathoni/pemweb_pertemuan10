<?php
echo "<h1>kodingan switch</h1>";
$role ="admin";
switch ($role) {
    case "admin":
        echo "akses penuh ke sistem";
        break;
    case "dosen":
        echo "akses data mahasiswa";
        break;
    case "mahasiswa":
        echo "akses pengisian krs";
        break;
    default:
        echo "role tidak di kenal";
}
?>