<?php
echo "<h1>Codingan Function</h1><br>";
echo "<h2>tanpa parameter</h2><br>";
function salam(){
    echo "Selamat Datang Di PHP <br>";

}
salam();

echo "<h1>Codingan Function</h1><br>";
echo "<h2>menggunakan parameter</h2>";
function salam2($name = "andy"){
    echo "SELAMAT DATANG DI PHP, $name <br>";
}
salam2();

echo "<h1>Codingan Function</h1><br>";
echo "<h2>dengan menggunakan return valuer</h2><br>";
function jumlah($a, $b){
    return $a + $b;
}
$hasil = jumlah(5,3);
    echo "hasil penjumlahan : $hasil";

?>