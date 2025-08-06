<?php
include("dbconnection.php");
session_start();
$selectedLanguage = $_SESSION["selectedLanguage"];
$getMessage = "SELECT $selectedLanguage.id, $selectedLanguage.kullanici_id, $selectedLanguage.mesaj, kullanicilar.kullaniciAdi
               FROM $selectedLanguage
               INNER JOIN kullanicilar ON $selectedLanguage.kullanici_id = kullanicilar.id
               ORDER BY $selectedLanguage.id DESC";
$result = $conn->query($getMessage);
if ($result) {
    $mesajListesi = array();

    while ($row = $result->fetch_assoc()) {
        $mesajListesi[] = array(
            'id' => $row['id'],
            'kullaniciAdi' => $row['kullaniciAdi'], 
            'mesaj' => $row['mesaj']
        );
    }

    echo json_encode($mesajListesi);
}

$conn->close();
?>
