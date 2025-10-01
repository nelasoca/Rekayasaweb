<?php
// Variabel JSON
$jsonString = '{"nama":"Nela Soca Putri Ardana","nim":"G.231.23.0009","jurusan":"Teknik Informatika"}';

// Decode ke PHP Object
$obj = json_decode($jsonString);

// Decode ke PHP Array
$arr = json_decode($jsonString, true);

// Akses nilai dari Object
echo "Akses dari Object:<br>";
echo "Nama: " . $obj->nama . "<br>";
echo "NIM: " . $obj->nim . "<br>";
echo "Jurusan: " . $obj->jurusan . "<br><br>";

// Akses nilai dari Array
echo "Akses dari Array:<br>";
echo "Nama: " . $arr['nama'] . "<br>";
echo "NIM: " . $arr['nim'] . "<br>";
echo "Jurusan: " . $arr['jurusan'] . "<br>";
?>