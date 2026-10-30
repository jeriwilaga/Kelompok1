<?php
$host = "localhost";
$user = "root";
$pass = "";
$db = "kelompok2"

$marsit = mysqli_connect ($host,$user,$pass,$db);

if (!$marsit){
    echo "Ga Mau konek"
}
?>