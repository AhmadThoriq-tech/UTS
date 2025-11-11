<?php include('config.php'); ?>

<?php
$id = $_GET['id'];
$data = mysqli_query($conn, "SELECT * FROM alat_kalibrasi WHERE id=$id");
$row = mysqli_fetch_assoc($data);

if (isset($_POST['update'])) {
    $nama = $_POST['nama_alat'];
    $seri = $_POST['nomor_seri'];
    $tgl  = $_POST['tanggal_kalibrasi'];
    $hasil = $_POST['hasil_kalibrasi'];
    $status = $_POST['status'];

    $query = "UPDATE alat_kalibrasi SET
              nama_alat='$nama', nomor_seri='$seri', tanggal_kalibrasi='$tgl',
              hasil_kalibrasi='$hasil', status='$status' WHERE id=$id";

    mysqli_query($conn, $query);
    header("Location: index.php");
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Edit Data</title>
    <link rel="stylesheet" href="assets/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
</head>
<body>
<div class="container mt-5">
    <h2 class="mb-4">Edit Data Kalibrasi</h2>
    <form method="POST">
        <div class="mb-3">
            <label>Nama Alat</label>
            <input type="text" name="nama_alat" class="form-control" value="<?= $row['nama_alat'] ?>" required>
        </div>
        <div class="mb-3">
            <label>Nomor Seri</label>
            <input type="text" name="nomor_seri" class="form-control" value="<?= $row['nomor_seri'] ?>" required>
        </div>
        <div class="mb-3">
            <label>Tanggal Kalibrasi</label>
            <input type="date" name="tanggal_kalibrasi" class="form-control" value="<?= $row['tanggal_kalibrasi'] ?>" required>
        </div>
        <div class="mb-3">
            <label>Hasil Kalibrasi</label>
            <input type="text" name="hasil_kalibrasi" class="form-control" value="<?= $row['hasil_kalibrasi'] ?>">
        </div>
        <div class="mb-3">
            <label>Status</label>
            <select name="status" class="form-select">
                <option <?= $row['status']=='Baik'?'selected':'' ?>>Baik</option>
                <option <?= $row['status']=='Perlu Kalibrasi Ulang'?'selected':'' ?>>Perlu Kalibrasi Ulang</option>
            </select>
        </div>
        <button type="submit" name="update" class="btn btn-success">Update</button>
        <a href="index.php" class="btn btn-secondary">Kembali</a>
    </form>
</div>
</body>
</html>
