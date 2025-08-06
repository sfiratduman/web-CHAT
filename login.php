<?php
include('dbConnection.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $kullanici_adi = $_POST["kullaniciAdi"];
    $sifre = $_POST["sifre"];
    $selectedLanguage = $_POST["language"]; 
    $db_kullanici = "SELECT * FROM kullanicilar WHERE kullaniciAdi = ? AND sifre = ?";
    $sorgu = $conn->prepare($db_kullanici);
    $sorgu->bind_param("ss", $kullanici_adi, $sifre);
    $sorgu->execute();
    $sonuc = $sorgu->get_result();
    if ($sonuc->num_rows > 0) {
        session_start();
        $row = $sonuc->fetch_assoc();
        $_SESSION['kullaniciID'] = $row['id'];
        $_SESSION['selectedLanguage'] = $selectedLanguage;
        if ($selectedLanguage == 'tr') {
            header("Location: turkce.php");
        } elseif ($selectedLanguage == 'en') {
            header("Location: ingilizce.php");
        } elseif ($selectedLanguage == 'fr') {
            header("Location: fransizca.php");
        } else {
            header("Location: index.php"); 
        }
        exit();
    } else {
        $hata_mesaji = "Hatalı giriş bilgileri. Lütfen tekrar deneyin.";
    }
    $sorgu->close();
}
$conn->close();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="login.css">
    <title>Giriş</title>
</head>

<body>
    <br>
    <div class="container">
        <div class="login-form">
            <form action="" method="post">
                <label for="language-select">Dil Seçin:</label>
                <select id="language-select" name="language">
                    <option value="tr">Türkçe</option>
                    <option value="en">İngilizce</option>
                    <option value="fr">Fransızca</option>
                </select>

                <label for="kullaniciAdi">Kullanıcı Adı:</label>
                <input type="text" id="kullaniciAdi" name="kullaniciAdi" required>

                <label for="sifre">Şifre:</label>
                <input type="password" id="sifre" name="sifre" required> 
                <button type="submit" name="login">Giriş Yap</button>
                <a href="register.php">Kayıt Ol</a>
            </form>
        </div>
    </div>
</body>

</html>
