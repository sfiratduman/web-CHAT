<?php
$error_message = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    include('dbConnection.php');
    $kullanici_adi = $_POST["kullaniciAdi"];
    $sifre = $_POST["sifre"];
    $kullanici_adi_check = "SELECT * FROM kullanicilar WHERE kullaniciAdi = '$kullanici_adi'";
    $insert_user_sql = "INSERT INTO kullanicilar (kullaniciAdi, sifre) VALUES ('$kullanici_adi', '$sifre')";
    if ($conn->query($insert_user_sql) === TRUE) {
        header("Location: login.php");
        exit();
    }
    $conn->close();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="register.css">
    <title>Basit PHP Chat</title>
</head>

<body>
    <form method="post" action="">
        <label for="kullaniciAdi">Kullanıcı Adı:</label>
        <input type="text" id="kullaniciAdi" name="kullaniciAdi" required>
        <br>
        <label for="sifre">Şifre:</label>
        <input type="sifre" id="sifre" name="sifre" required>
        <br>
        <button type="submit">Kayıt Ol</button>
    </form>

    <?php
    ?>
</body>

</html>