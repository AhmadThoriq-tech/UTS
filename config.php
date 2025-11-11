<?php
$host = "localhost";
$user = "root";
$pass = "";
$db   = "db_kalibrasi";

// Koneksi ke MySQL tanpa pilih DB dulu
$conn = mysqli_connect($host, $user, $pass);

if (!$conn) {
    die("Koneksi gagal ke MySQL: " . mysqli_connect_error());
}

// Buat database jika belum ada
mysqli_query($conn, "CREATE DATABASE IF NOT EXISTS $db");
mysqli_select_db($conn, $db);

// Buat tabel kalau belum ada
$create_table = "CREATE TABLE IF NOT EXISTS alat_kalibrasi (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nama_alat VARCHAR(100) NOT NULL,
    nomor_seri VARCHAR(100) NOT NULL,
    tanggal_kalibrasi DATE NOT NULL,
    hasil_kalibrasi VARCHAR(100),
    status VARCHAR(50)
)";
mysqli_query($conn, $create_table);
?>
