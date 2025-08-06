<?php
include("dbconnection.php");
session_start();
if(!isset($_SESSION["kullanici"])){
    header("Location: login.php");
}

$kullaniciID = $_SESSION["kullaniciID"];
$selectedLanguage = $_SESSION["selectedLanguage"];
$mesaj = $_POST["content"];
$insertMessage = "INSERT INTO $selectedLanguage (kullanici_id, mesaj) VALUES (?, ?)";
$stmt = $conn->prepare($insertMessage);
$stmt->bind_param("is", $kullaniciID, $mesaj);
if ($stmt->execute()) {
    echo "ok";
} else {
    echo "no - " . $stmt->error;
}
$stmt->close();
$conn->close();
?>
