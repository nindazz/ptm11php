<?php
$buah = ["apel", "jeruk", "mangga"];
echo "$buah[0]<br>";
echo "$buah[1]<br>";
echo "$buah[2]";

echo "<h2>associative array</h2>";
$mahasiswa = [
    "nama"=> "ze",
    "nim"=> "1234567",
    "jurusan"=> "tataboga"
];
echo $mahasiswa['nama'];
echo "<br>";
echo $mahasiswa['jurusan'];

echo "<h2>multi array</h2>";
$daftarMhs = [
    ["ze", 1234567, "tataboga"],
    ["kia",8901234, "dkv"],
];
echo $daftarMhs[0][0];
?>