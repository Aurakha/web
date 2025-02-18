<?php
include 'config.php';

if ($pdo) {
    echo "Koneksi ke database berhasil!";
} else {
    echo "Koneksi gagal!";
}
?>
