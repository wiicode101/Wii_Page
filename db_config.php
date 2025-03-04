<?php
// Konfigurasi koneksi ke database
$host = 'localhost'; // Nama host (biasanya 'localhost')
$dbname = 'wiiarts_page'; // Nama database Anda
$username = 'root'; // Username database Anda
$password = ''; // Password database Anda

try {
    // Membuat koneksi ke database
    $pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Koneksi gagal: " . $e->getMessage());
}
?>
