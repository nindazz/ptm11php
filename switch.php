<?php
$role="admin";
switch($role){
    case "admin":
        echo "akses penuh kesistem";
        break;
    case "dosen":
        echo "akses data mahasiswa";
        break;
    case "mahasiswa":
        echo "akses data KRS";
        break;
    default:
        echo "role tidak ada";
        break;    
}
?>