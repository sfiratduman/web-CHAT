<?php
$db_servername = "localhost";
$db_kullaniciAdi = "root";
$db_sifre = "";
$db_name = "kayitsistemi";

$conn = new mysqli($db_servername, $db_kullaniciAdi, $db_sifre, $db_name);

if ($conn->connect_error) {
    die("Bağlantı hatası: " . $conn->connect_error);
}
?>
