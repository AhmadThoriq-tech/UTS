<?php include('config.php'); ?>

<?php
if (isset($_POST['submit'])) {
    $nama = $_POST['nama_alat'];
    $seri = $_POST['nomor_seri'];
    $tgl  = $_POST['tanggal_kalibrasi'];
    $hasil = $_POST['hasil_kalibrasi'];
    $status = $_POST['status'];

    $query = "INSERT INTO alat_kalibrasi (nama_alat, nomor_seri, tanggal_kalibrasi, hasil_kalibrasi, status)
              VALUES ('$nama', '$seri', '$tgl', '$hasil', '$status')";
    mysqli_query($conn, $query);
    header("Location: index.php");
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Tambah Data</title>
    <link rel="stylesheet" href="assets/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
</head>
<body>
<div class="container mt-5">
    <h2 class="mb-4">Tambah Data Kalibrasi</h2>
    <form method="POST">
        <div class="mb-3">
            <label>Nama Alat</label>
            <input type="text" name="nama_alat" class="form-control" required>
        </div>
        <div class="mb-3">
            <label>Nomor Seri</label>
            <input type="text" name="nomor_seri" class="form-control" required>
        </div>
        <div class="mb-3">
            <label>Tanggal Kalibrasi</label>
            <input type="date" name="tanggal_kalibrasi" class="form-control" required>
        </div>
        <div class="mb-3">
            <label>Hasil Kalibrasi</label>
            <input type="text" name="hasil_kalibrasi" class="form-control">
        </div>
        <div class="mb-3">
            <label>Status</label>
            <select name="status" class="form-select">
                <option value="Baik">Baik</option>
                <option value="Perlu Kalibrasi Ulang">Perlu Kalibrasi Ulang</option>
            </select>
        </div>
        <button type="submit" name="submit" class="btn btn-success">Simpan</button>
        <a href="index.php" class="btn btn-secondary">Kembali</a>
    </form>
</div>
</body>
</html>
