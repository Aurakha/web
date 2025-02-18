<?php
// Konfigurasi dasar PHP untuk HTML

// Aktifkan error reporting (hanya untuk debugging, matikan di produksi)
error_reporting(E_ALL);
ini_set('display_errors', 1);

// Konfigurasi database
$host = 'localhost'; // Ganti dengan host database Anda
$dbname = 'latihan_database'; // Ganti dengan nama database Anda
$username = 'root'; // Ganti dengan username database Anda
$password = ''; // Ganti dengan password database Anda

try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Koneksi gagal: " . $e->getMessage());
}

// Fungsi dasar untuk mengamankan input pengguna
function sanitize_input($data) {
    return htmlspecialchars(strip_tags(trim($data)));
}
?>
